<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getRecipeByCategoryId($id){
        $id = Category::with('recipes')->find($id);

        return view('main.category', ['categoryId' => $id]);
    }
}
