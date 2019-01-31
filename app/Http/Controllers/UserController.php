<?php

namespace App\Http\Controllers;

use App\Viewer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function useradd()
    {
        return view('useradd');
    }

    function useradder(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'address1' => 'required',
            'address2' => 'required'
        ]);
        $item = array(
            'username' => $validated['username'],
            'password' => $validated['password'],
            'address1' => $validated['address1'],
            'address2' => $validated['address2']
        );
        if (Viewer::create($item)) {
            return redirect()->back()->with('success','created');

        }
        return redirect()->back()->with('fail','fail to create');
    }
}
