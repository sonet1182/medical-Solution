<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmbController extends Controller
{
    //

    public function index()
    {
        $book = Book::where('amb_id', '=', Auth::user()->id)->get();
        return view('vendor.home')->with('book', $book);
    }

    public function accept($id)
    {
        $book = Book::find($id);
        $book->status = "1";
        $book->update();

        return redirect()->back()->with('status', 'Booking Accepted!');
    }

    public function denied($id)
    {
        $book = Book::find($id);
        $book->status = "0";
        $book->update();

        return redirect()->back()->with('status', 'Booking Denied!');
    }
}