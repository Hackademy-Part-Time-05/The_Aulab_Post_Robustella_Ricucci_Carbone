<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function Homepage() {
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view ('homepage', compact('articles'));
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        dd($request->all());
    }
}

