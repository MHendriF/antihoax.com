<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Serps\SearchEngine\Google\GoogleClient;
use Serps\HttpClient\CurlClient;
use Serps\SearchEngine\Google\GoogleUrl;
use Serps\Exception\CaptchaException;
use Serps\Exception\RequestErrorException;
use Serps\Core\Browser\Browser;
use Serps\SearchEngine\Google\NaturalResultType;
use App\Website;
use App\History;
use Session;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	try{
	    	$database = Website::all();
	    	$data = History::orderBy('id', 'DESC')->take(5)->get();
	    	
	    	$valid = 0;
	    	$hoax = 0;
	    	$unknown = 0;
	    	$n = count($database)-1;

	        $userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
		    $browserLanguage = "us-US";
		    $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage);

		    // Create a google client using the browser we configured
		    $googleClient = new GoogleClient($browser);

		    // Create the url that will be parsed
		    $search = $request['keyword'];
		    $googleUrl = new GoogleUrl();
		    $googleUrl->setSearchTerm($search);
		    $response = $googleClient->query($googleUrl);
		    $results = $response->getNaturalResults();

		    //dd($results);

		    //get url website from 10 top search in google
		    for($i=0; $i<count($results); $i++) 
		    {
		    	$web[$i] = $results[$i]->url;
		    	//echo $web[$i];
		    	
		    	$mystring =  $web[$i];

		    	//Get Query from database
		    	for($j=0; $j<count($database); $j++) 
				{
					$db[$j] = $database[$j]->address;
			  		// echo $db[$i];
			  		// echo "\r\n";

					//compare with database
			  		$findme = $db[$j];
			    	$pos = strpos($mystring, $findme);
					if($pos !== false)
					{
						if($database[$j]->type == "Valid")
						{
							$valid = $valid + 10;
							break;
						}
						elseif($database[$j]->type == "Hoax")
						{
							$hoax = $hoax + 10;
							break;
						}
					}
					elseif($pos === false && $j == $n)
					{
						//echo "The string '$findme' was not found in the string '$mystring'\n";
						$unknown = $unknown + 10;
					  	//echo "unknown = '$unknown'\n";
					}
		    	}

	        }

	        //cek apakah kata yang dicari ada dalam history
	        $story = History::where('keyword', '=', $request['keyword'])->first();
	        //jika ada maka update
	        if ($story) {
		   		$story->keyword = $request->get('keyword');
		   		$story->category = "Umum";
		   		$story->valid = $valid;
		   		$story->hoax = $hoax;
		   		$story->unknown = $unknown;
		   		$story->save();

		   		Session::flash('hoax', $hoax);
			    Session::flash('unknown', $unknown);
			    Session::flash('valid', $valid);
				return view('welcome', compact('search','hoax','data','results'));
			}

			//jikatodak ada maka buat baru
			else
			{
				$history = new History(array(
					'keyword'  => $request->get('keyword'),
					'category' => "Umum",
					'valid'    => $valid,
					'hoax'     => $hoax,
					'unknown'  => $unknown
	         	));

		        if($history->save())
		        {
		        	Session::flash('hoax', $hoax);
			        Session::flash('unknown', $unknown);
			        Session::flash('valid', $valid);

			        return view('welcome', compact('search','hoax','data','results'));
		        }
			}

	       
	    }
	    catch(\Exception $e){
            // return redirect()->back()->with('error', ' Sorry something went worng. Please try again.');
        }
        

        //session()->flash('message', 'Message was Ok');
		//return redirect()->back()->with('coba', ' Sorry something went worng. Please try again.');
		//dd($results);
		//return Response::json(array('success' => true, 'payload' => View::make('welcome'))

    }
}
