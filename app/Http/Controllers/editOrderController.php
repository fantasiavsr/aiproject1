<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;

class editOrderController extends Controller
{
    public function index()
    {
        $data = order::all();
        return view('editOrder', [
            'data' => $data,
            'title' => "Edit Order Page",
            'submenu' => "No"
        ]);
    }

    // public function showData($id)
    // {

    // }

    // public function update(Request $request)
    // {

    // }

    public function delete($id)
    {
        $data = order::find($id);
        $data ->delete();

        return redirect('/editOrder');
    }
}
