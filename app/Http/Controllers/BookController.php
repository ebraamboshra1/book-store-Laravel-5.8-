<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('admin/booktable', ['book' => $book]);
    }

    public function create(Request $request){
        try{
        $book = new Book([
            'name' => $request->get('name'),
            'Description'=> $request->get('Description'),
            'img'=> $request->get('img'),
            'quantity'=> $request->get('quantity'),
            'price'=> $request->get('price'),
            'auther_name'=> $request->get('auther_name'),
          ]);
          
          $book->save();
          return redirect('/book-table');
          }
          catch(\Illuminate\Database\QueryException  $e){
            report($e);
            return redirect()->back() ->with('alert', 'error!');
          }
    }

    public function get($id){
        $book = Book::find($id);
       //$Book = $Books->contains(Book::find($id));
       if(is_null($book)){
        return redirect()->back() ->with('alert', 'error!');
     }
     return view('admin/bookupdate')->with('book',$book)->render();
        
    }

    public function update(Request $request,$id){
        $book = Book::find($id);
        $book->name=$request->name;
        $book->Description=$request->Description;
        $book->img=$request->img;
        $book->quantity=$request->quantity;
        $book->price=$request->price;
        $book->auther_name=$request->auther_name;
        $book->save();
        if(is_null($book)){
            return redirect()->back() ->with('alert', 'error!');
         }
        return redirect('/book-table');
    }

    public function delete($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('alert', 'Done');
    }

    public function buy($id){
        $book = Book::find($id);
        if(is_null($book)){
            return redirect()->back() ->with('alert', 'error!');
         }
        return view('/user/buybook')->with('book',$book)->render();
    }
    public function buy_post(Request $request,$id){
        $book = Book::find($id);
        $book->name=$book->name;
        $book->Description=$book->Description;
        $book->img=$book->img;
        $book->quantity=$book->quantity-$request->quantity;
        $book->price=$book->price;
        $book->auther_name=$book->auther_name;
        $book->save();
        if(is_null($book)){
            return redirect()->back() ->with('alert', 'error!');
         }
        return redirect('/books');
    }

}
