<?php

namespace App\Http\Controllers;
use App\Models\order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class orderController extends Controller
{
    public function index()
    {
        return view('order', [
            'title' => "Order"
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email',
        ]);

        $data = new order;
        $data-> email = $request->email;
        $data-> language = $request->language;
        $data-> title = $request->title;
        $data-> desc = $request->desc;

        if ($validateData) {
            $data->save();
        }

        return redirect('/login')->with('success', 'Order Success!');;
    }
}
