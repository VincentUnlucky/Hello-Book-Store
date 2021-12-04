<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function fiction(){
        $temp= DB::table('books')->select('book_id','title','author')->join('details','details.book_id','=','books.id')->where('category_id','=','1')->get();
        return view('fiction',['temps'=>$temp]);
    }

    public function science(){
        $temp= DB::table('books')->select('book_id','title','author')->join('details','details.book_id','=','books.id')->where('category_id','=','2')->get();
        return view('science',['temps'=>$temp]);
    }

    public function computer(){
        $temp= DB::table('books')->select('book_id','title','author')->join('details','details.book_id','=','books.id')->where('category_id','=','3')->get();
        return view('computer',['temps'=>$temp]);
    }
}
