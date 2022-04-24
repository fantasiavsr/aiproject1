<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\dataHome;

class editHomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dataHome::all();
        $dataHome = dataHome::all();
        return view('editHome', [
            'title' => "Edit Home Page",
            'dataHome' => $dataHome,
            'submenu' => "Yes"
        ]);
    }

    public function showData($id)
    {
        // dataHome::all();
        $data = dataHome::find($id);
        return view('edit', [
            'title' => "Edit Home Page",
            'data' => $data,
            'submenu' => "Yes",
            'action' => "/editHome"
        ]);
    }

    public function update(Request $request)
    {
        $dataHome = dataHome::find($request->id);
        $dataHome->contentTitle = $request->contentTitle;
        $dataHome->content = $request->content;
        $dataHome->save();
        return redirect('/editHome');
    }
}
