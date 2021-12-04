<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function view(){
        $temp=categories::all();
        return view('Categories',[
            'temps'=>$temp,
        ]);
    }
}
