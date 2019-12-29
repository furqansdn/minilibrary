<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);
        return view('frontend.book.index',[
            'books' => $books,
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show',[
            'book' => $book
        ]);
    }
    public function borrow(Book $book)
    {
        $user = auth()->user();
        $user->borrow()->attach($book);
        return 'Ok';
    }
}
