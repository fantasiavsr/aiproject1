<?php

namespace App\Http\Controllers;

use App\Models\dataMedia;


use Illuminate\Http\Request;

class editMediaController extends Controller
{
    public function index()
    {
        $data = dataMedia::all();
        return view('editMedia', [
            'data' => $data,
            'title' => "Edit Media Page",
            'submenu' => "Yes"
        ]);
    }

    public function showData($id)
    {
        // dataHome::all();
        $data = dataMedia::find($id);
        return view('edit', [
            'title' => "Edit Media Page",
            'data' => $data,
            'submenu' => "Yes",
            'action' => "/editMedia"
        ]);
    }

    public function update(Request $request)
    {
        $data = dataMedia::find($request->id);
        $data ->contentTitle = $request->contentTitle;
        $data ->content = $request->content;
        $data ->save();
        return redirect('/editMedia');
    }
}
