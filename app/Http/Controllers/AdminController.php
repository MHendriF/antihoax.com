<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Website;
use App\History;


class AdminController extends Controller
{
    public function index()
    {
    	//return view('backend.auth.login');
        $data = Website::all();
        return view('backend.admin.website', compact('data'));
    }

    public function history()
    {
        //return view('backend.auth.login');
        $data = History::all();
        return view('backend.admin.history', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.add_website');
    }

    public function store(Request $request)
    {
       $this->validate($request, array(
            'alamat'     => 'required|max:100',
            'category'   => 'required'
            ));

        Website::create($request->all());

        //Session::flash('new', 'New room was successfully added!');
        return redirect('website');
    }

 	public function show($id)
    {
        
    }

    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
       
    }

    
    public function destroy($id)
    {
        
    }
}
