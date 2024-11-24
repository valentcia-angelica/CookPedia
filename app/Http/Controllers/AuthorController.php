<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //
    public function getAllAuthors(){
        $authors = Author::with('recipes')->get();

        return view('main.author', ['authors' => $authors]);
    }

    public function getAuthorDetail($id){
        $authorId = Author::with('recipes')->find($id);
        return view('main.authorDetail', ['authorId' => $authorId]);
    }
}
