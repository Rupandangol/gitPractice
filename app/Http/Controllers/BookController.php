<?php

namespace App\Http\Controllers;

use App\Book;
use App\BookImage;
use Illuminate\Http\Request;

class BookController extends Controller
{

    function home()
    {
        return view('home');
    }

    function add()
    {
        return view('add');
    }

    function insert(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required',
            'title' => 'required',
            'about' => 'required'
        ]);

        $item = array(
            'author' => $validated['author'],
            'title' => $validated['title'],
            'about' => $validated['about']
        );
        if (Book::create($item)) {
            return redirect()->back()->with('success', 'inserted');
        }
        return redirect()->back()->with('fail', 'Not inserted');
    }

    function view()
    {
        $item['data'] = Book::paginate(5);
        return view('view', $item);
    }

    function delete($id)
    {
        Book::find($id)->delete();
        return redirect()->back();
    }

    function read($id)
    {
        $item['data'] = Book::find($id);
        return view('read', $item);
    }

    function update($id)
    {
        $item['data'] = Book::find($id);
        return view('update', $item);
    }

    function updated(Request $request, $id)
    {
        $validated = $request->validate([
            'author' => 'required',
            'title' => 'required',
            'about' => 'required'
        ]);
        $data = [
            'author' => $validated['author'],
            'title' => $validated['title'],
            'about' => $validated['about']
        ];
        if (Book::find($id)->update($data)) {
            return redirect()->back()->with('success', 'UPDATED');
        }
        return redirect()->back()->with('fail', 'NOT UPDATED');
    }

    function uploadView($id)
    {
        $item['data'] = Book::find($id);
        return view('imageUpload', $item);
    }

    function uploadSubmit(Request $request, $id)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $imageName = Book::find($id)->title . '_' . time() . '.' . strtolower($file->extension());

            $check = $request->image->move(public_path('iamge/'), $imageName);

            if ($check) {

                $inputs = [
                    'image' => $imageName,
                    'size' => 123,
                    'mimetype' => 'png',
                    'book_id' => $id
                ];
                if (BookImage::create($inputs))
                    return redirect()->back()->with('success', 'image uploaded');
            }
        }
        return redirect()->back()->with('fail', 'image not uploaded');
    }
}
