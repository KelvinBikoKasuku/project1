<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        return view('Books');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name'=> 'require|string|max:255',
            'pages'=> 'required|integer',
            'IBN'=> 'required',
            'category'=> 'required',
            'publisher'=> 'required',
            'yop'=> 'required',
            'user_id'=> 'required',
        ]);
    }
}
