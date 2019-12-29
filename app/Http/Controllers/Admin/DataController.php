<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name','ASC');
        return datatables()->of($authors)
                ->addIndexColumn()
                ->addColumn('action', 'admin.author.action')
                ->toJson();
    }

    public function books()
    {
        $books = Book::orderBy('id','ASC');
        return datatables()->of($books)
                ->addColumn('author', function(Book $model){
                    return $model->author->name;
                })
                ->editColumn('cover',function(Book $model){
                    return '<img src="'.$model->getCover().'" height="150px">';
                })
                ->addIndexColumn()
                ->addColumn('action', 'admin.book.action') 
                ->rawColumns(['cover','action'])
                ->toJson();
    }
}
