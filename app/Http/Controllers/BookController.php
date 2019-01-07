<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $book = new Book;
        $book->user_parent_id = $request->user_parent_id;
        $book->event_id = $request->event_id;
        $book->child_id = $request->child_id;
        $book->family_id = $request->family_id;
        $book->book_price = $request->book_price;
        $book->save();
        return redirect('books/'.$book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', ['books' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Book $book)
    {
        return view('books.edit',['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
        $book= UserChild::find($request->id);
        $book->family_id = $request->family_id;
        $book->user_parent_id = $request->user_parent_id;
        $book->event_id = $request->event_id;
        $book->child_id = $request->child_id;
        $book->family_id = $request->family_id;
        $book->book_price = $request->book_price;
        $book->save();
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books');
    }
}