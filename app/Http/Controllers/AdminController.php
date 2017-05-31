<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Website;
use App\History;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $data = Website::all();
        return view('backend.admin.website.website', compact('data'));
    }

    public function history()
    {
        $data = History::all();
        return view('backend.admin.history.history', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.website.add_website');
    }

    public function store(Request $request)
    {
       $this->validate($request, array(
            'address'     => 'required|max:100',
            'type'   => 'required'
            ));

        Website::create($request->all());

        Session::flash('new', 'New website was successfully added!');
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
