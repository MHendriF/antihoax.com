<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
    	$data = News::all();
        return view('backend.admin.news', compact('data'));
    }

   
    public function create()
    {
        return view('backend.admin.add_news');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, array(
            'kata'     => 'required|max:100',
            'category'   => 'required'
            ));

        News::create($request->all());

        //Session::flash('new', 'New room was successfully added!');
        return redirect('news');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        News::find($id)->update($request->all());
        return redirect('news');
    }

   
    public function destroy($id)
    {
        //
    }
}
