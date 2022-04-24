<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataHome;

class homeController extends Controller
{
    public function index()
    {
        $dataHome = dataHome::all();
        return view('home', [
            'data' => $dataHome,

            'c1' => dataHome::find(1)->contentTitle,
            'c1desc' => dataHome::find(1)->desc,

            'c2' => dataHome::find(2)->contentTitle,
            'c2desc' => dataHome::find(2)->desc,

            'c3' => dataHome::find(3)->contentTitle,
            'c3desc' => dataHome::find(3)->desc,

            'i1' => dataHome::find(4)->contentTitle,
            'i1desc' => dataHome::find(4)->desc,

            'i2' => dataHome::find(5)->contentTitle,
            'i2desc' => dataHome::find(5)->desc,

            'i3' => dataHome::find(6)->contentTitle,
            'i3desc' => dataHome::find(6)->desc,

            'i4' => dataHome::find(7)->contentTitle,
            'i4desc' => dataHome::find(7)->desc,

            'c4' => dataHome::find(8)->contentTitle,
            'c4desc' => dataHome::find(8)->desc,

            'title' => "Home"
        ]);
    }
}
