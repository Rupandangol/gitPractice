<?php

namespace App\Http\Controllers;

use App\BackgroundImage;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    function uploadBackground()
    {
        return view('backgroundImage');
    }

    function submitBackground(Request $request)
    {

        if ($request->hasFile('backgroundImage')) {
            $file = $request->file('backgroundImage');
            $backgroundImageName = time() . '.' . strtolower($file->extension());
            $check = $request->backgroundImage->move(public_path('background/'), $backgroundImageName);
            if ($check){
                    $inputs=[
                        'imageName'=>$backgroundImageName,
                        'imageSize'=>123,
                        'mimeType'=>'png'
                    ];
                    if (BackgroundImage::create($inputs)){
                        return redirect()->back()->with('success','background image uploaded');
                    }
            }
        }return redirect()->back()->with('fail','Failed');
        //        dd($request->all());
    }
}
