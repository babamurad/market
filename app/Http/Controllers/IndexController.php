<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $roots = Category::where('parent_id', 0)->get();
        //временно добавил переменную Brands сюда
        $brands = Brand::limit(5)->get();
        //
        return view('front.index', compact('roots', 'brands'));
    }
}
