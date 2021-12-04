<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function view(){
        $temp=details::all();
        return view('Details',[
            'temps'=>$temp,
        ]);
    }

    public function details1($id){
        $temp = details::find($id);
        return view('details',['temps'=>$temp]);
    }

    public function details($id){
        $temp= DB::table('books')->select('title','author','publisher','year','description')->join('details','details.book_id','=','books.id')->get();
        return view('details',['temps'=>$temp[$id]]);
    }
}
