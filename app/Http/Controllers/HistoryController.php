<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use Session;

class HistoryController extends Controller
{
    public function index()
    {
        $data = History::all();
        return view('backend.admin.history.history', compact('data'));
    }


    public function edit($id)
    {
        $data = History::find($id);
        return view('backend.admin.history.edit_history', compact('data'));
    }

    
    public function update(Request $request, $id)
    {
        History::find($id)->update($request->all());
        Session::flash('update', 'History was successfully updated!');
        return redirect('history');
    }

    
    public function destroy($id)
    {
        
    }
}
