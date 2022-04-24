<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataHome;
use App\Models\dataMedia;
use App\Models\contact;

class adminController extends Controller
{
    public function index()
    {
        $data1 = dataHome::all();
        $data2 = dataMedia::all();
        $data3 = contact::all();
        return view('admin', [
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3,
            'title' => "Admin",
            'submenu' => "No"
        ]);
    }
}
