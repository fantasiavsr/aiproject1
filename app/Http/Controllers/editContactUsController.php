<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class editContactUsController extends Controller
{
    public function index()
    {
        $data = contact::all();
        return view('editContactUs', [
            'data' => $data,
            'title' => "Edit Contact Us Page",
            'submenu' => "Yes"
        ]);
    }

    public function showData($id)
    {
        // dataHome::all();
        $data = contact::find($id);
        return view('editContact', [
            'title' => "Edit Media Page",
            'data' => $data,
            'submenu' => "Yes",
            'action' => "/editContactUs"
        ]);
    }

    public function update(Request $request)
    {

        $validateData = $request->validate([
            'email' => '|email',
        ]);

        $data = contact::find($request->id);
        $data->email = $request->email;
        $data->notelp = $request->notelp;
        $data->alamat = $request->alamat;

        if ($validateData) {
            $data->save();
        }

        return redirect('/editContactUs');
    }
}
