<?php

namespace App\Http\Controllers;

use App\Click;
use Illuminate\Http\Request;

class clickController extends Controller
{
    function index()
    {
        return view('click.clickChange');
    }

    function insert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4|unique:clicks,name',
            'status' => 'required',
            'detail' => 'required',
            'date' => 'required'

        ]);

        $data = [
            'name' => $validated['name'],
            'status' => $validated['status'],
            'detail' => $validated['detail'],
            'date' => $validated['date']
        ];

        if (Click::create($data)) {
            return redirect()->back()->with('success', 'inserted');
        }
        return redirect()->back()->with('fail', 'failed');
    }

    function view()
    {
        return view('click.clickView');
    }

}
