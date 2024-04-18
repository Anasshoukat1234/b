<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

class BookController extends Controller
{
    public function getData(){
        return view('login');
    }

    public function index()
    {

        $data = Book::all();

     return view('web.index', compact('data'));
    }
    public function show()
{
    $data = Book::paginate(10);

    return view('web.index', compact('data'));
}

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $data = Book::where('name', 'like', '%' . $searchTerm . '%')->paginate(10);

        return view('web.index', compact('data'));

    }

    function showdata($id)
    {
        $data = Book::find($id);
        return view('edit', compact('data'));
    }

    // function update(Request $req){
    //     $data = Book::find($req->id);
    //     $data -> name = $req -> name;
    //     $data -> price = $req -> price;
    //     $data -> image = $req -> image;
    //     $data -> category_id = $req -> category_id;
    //     $data -> author_id = $req -> author_id;
    //     $data -> content = $req -> content;
    //     $data -> rating = $req -> rating;
    //     $data -> user_id = $req -> user_id;
    //     $data->update();
    //     // $category = Category::findOrFail($req->category_id);
    //     // $author = Author::findOrFail($req->author_id);

    //     // $data->category()->associate($category);
    //     // $data->author()->associate($author);
    //     $data->save();
    //     return redirect()->route('web.index');


    // }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author_id' => 'required',
            'category_id' => 'required',
             'content' => 'required',
            'rating' => 'required',
            'user_id' => 'required',
            'price' => 'required',

        ]);
        $book->update($request->all());
        $category = Category::findOrFail($request->category_id);
        $author = Author::findOrFail($request->author_id);

        $book->category()->associate($category);
        $book->author()->associate($author);



        $book->save();

        return redirect()->route('web.index')->with('success', 'Book updated successfully.');
        // dd($request->all());
    }

    function delete($id)
    {
        $data = Book::find($id);
        $data->delete();
        return back();
    }

    public function showForm(){
        return view('add');
    }
    public function storeData(Request $req){

        // dd($req->all());
        Book::create($req->all());
        return redirect()->route('web.index');
    }
}

