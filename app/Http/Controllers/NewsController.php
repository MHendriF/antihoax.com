<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;

class NewsController extends Controller
{
    public function index()
    {
    	$data = News::all();
        return view('backend.admin.news.news', compact('data'));
    }

   
    public function create()
    {
        return view('backend.admin.news.add_news');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, array(
            'keyword'     => 'required|max:100',
            'category'   => 'required',
            'type'   => 'required',
            ));

        News::create($request->all());

        Session::flash('new', 'New news was successfully added!');
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
        Session::flash('update', 'New news was successfully updated!');
        return redirect('news');
    }

   
    public function destroy($id)
    {
        //
    }
}
