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
	    	$blacklist = 0;
	    	$unknown = 0;
	    	$n = count($database)-1;

	        $userAgent = "Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.93 Safari/537.36";
		    $browserLanguage = "us-US";
		    $browser = new Browser(new CurlClient(), $userAgent, $browserLanguage);

		    // Create a google client using the browser we configured
		    $googleClient = new GoogleClient($browser);

		    // Create the url that will be parsed
		    $search = $request['word'];
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
					$db[$j] = $database[$j]->alamat;
			  		// echo $db[$i];
			  		// echo "\r\n";

					//compare with database
			  		$findme = $db[$j];
			    	$pos = strpos($mystring, $findme);
					if($pos !== false)
					{
						if($database[$j]->category == "Valid")
						{
							$valid = $valid + 10;
							//echo "valid = '$valid'\n";
							//echo "The string '$findme' was found in the string '$mystring'\n";
						    //echo " and exists at position $pos\n";
							break;
						}
						elseif($database[$j]->category == "Blacklist")
						{
							$blacklist = $blacklist + 10;
							//echo "blacklist = '$blacklist'\n";
							//echo "The string '$findme' was found in the string '$mystring'\n";
						    //echo " and exists at position $pos\n";
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
	        $story = History::where('kata', '=', $request['word'])->first();
	        if ($story) {
		   		$story->kata = $request->get('word');
		   		$story->valid = $valid;
		   		$story->hoax = $blacklist;
		   		$story->unknown = $unknown;
		   		$story->save();

		   		Session::flash('blacklist', $blacklist);
			    Session::flash('unknown', $unknown);
			    Session::flash('valid', $valid);
				return view('welcome', compact('search','blacklist','data'));
			}

			else
			{
				$history = new History(array(
					'kata'    => $request->get('word'),
					'valid'   => $valid,
					'hoax'    => $blacklist,
					'unknown' => $unknown
	         	));

		        if($history->save())
		        {
		        	Session::flash('blacklist', $blacklist);
			        Session::flash('unknown', $unknown);
			        Session::flash('valid', $valid);

			        return view('welcome', compact('search','blacklist','data'));
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
