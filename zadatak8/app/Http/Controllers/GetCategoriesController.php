<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class GetCategoriesController extends Controller
{
    /**
     * Section where you route your page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::whereNull('category_id')
            ->with('childrenCategories')
            ->get();
        return view('getcategories', compact('categories'));
    }

}
