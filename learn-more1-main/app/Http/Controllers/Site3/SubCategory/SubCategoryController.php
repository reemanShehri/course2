<?php

namespace App\Http\Controllers\Site3\SubCategory;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function index($id) {

       // $sub_categories = SubCategory::where('category_id', $id)->get();
         $sub_categories = SubCategory::query()->where('category_id', $id)->get();
      // id -> category -------- >>> subcategory
     return view('site3.sub_category.index' , compact('sub_categories')) ;
    }
}
