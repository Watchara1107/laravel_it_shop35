<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function showcategory(){
        return view('admin.category.categoryform');
    }

    public function create(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/CategoryForm');
    }
}
