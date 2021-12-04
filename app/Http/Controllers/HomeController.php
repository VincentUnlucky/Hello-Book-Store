<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Contact(){
        return view('Contact');
    }

    public function home(){
        $temp= DB::table('books')->select('book_id','title','author')->join('details','details.book_id','=','books.id')->simplePaginate(5);
        return view('home',['temps'=>$temp]);
    }


}
