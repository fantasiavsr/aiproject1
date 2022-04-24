<?php

namespace App\Http\Controllers;
use App\Models\dataMedia;

use Illuminate\Http\Request;

class mediaController extends Controller
{
    public function index()
    {
        $data = dataMedia::all();
        return view('media', [
            'title' => "Media",

            'c1' => dataMedia::find(1)->contentTitle,
            'c1desc' => dataMedia::find(1)->desc,

            'c2' => dataMedia::find(2)->contentTitle,
            'c2desc' => dataMedia::find(2)->desc,

            'c3' => dataMedia::find(3)->contentTitle,
            'c3desc' => dataMedia::find(3)->desc,
        ]);
    }
}
