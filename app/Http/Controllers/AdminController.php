<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	//return view('backend.auth.login');
        return view('backend.admin.website');
    }


    public function create()
    {
        return view('backend.admin.add_website');
    }

    public function history()
    {
        return view('backend.admin.history');
    }

    public function store(Request $request)
    {
       
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
