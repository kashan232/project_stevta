<?php

namespace App\Http\Controllers;

use App\Models\LibraryBook;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PharIo\Manifest\Library;

class LibraryBookController extends Controller
{
    public function book_list(Request $request)
    {
        $pagename = 'Book List';
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');
        $lib_books = LibraryBook::where('institute_id', '=', $Institute_admin_id)->where('campus_id', '=', $campus_id)->get();
        return view('campus_admin_panel.dashboard.Campus_General_Operations.library.library_book.book_list', [
            'pagename' => $pagename,
            'lib_books' => $lib_books,
        ]);
    }
    public function add_book(Request $request)
    {
        $pagename = 'Add Book';
        return view('campus_admin_panel.dashboard.Campus_General_Operations.library.library_book.add_book', [
            'pagename' => $pagename,
        ]);
    }
    public function store_book(Request $request)
    {
        $Institute_admin_id = $request->session()->get('Institute_admin_id');
        $campus_id = $request->session()->get('campus_id');

        $books = LibraryBook::create([
            'institute_id'      =>$Institute_admin_id,
            'campus_id'         =>$campus_id,
            'book_title'        =>$request->book_title,
            'book_number'       =>$request->book_number,
            'publisher'         =>$request->publisher,
            'author'            =>$request->author,
            'subject'           =>$request->subject,
            'book_price'        =>$request->book_price,
            'post_date'         =>$request->post_date,
            'description'       =>$request->description,
            'created_at'        => Carbon::now(),
            'updated_at'        => Carbon::now(),
        ]);

        return redirect()->back()->with('book-added', 'Books Added Successfully');
    }
}
