<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $root = Category::where('parent_id', 0)->get();
        return view('catalog.index', compact('root'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->get();
        $products = Product::where('category_id', $category->id)->get();
        return view('catalog.category', compact('category', 'products'));
    }

    public function brand($slug)
    {
        $brand = Brand::where('slug', $slug)->get();
        $products = Product::where('brand', $brand->id)->get();
        return view('catalog.brand', compact('brand', 'products'));
    }

    public function product($slug)
    {
        $product = Product::select(
            'products.*',
            'categories.name as category_name',
            'categories.slug as category_slug',
            'brands.name as brand_name',
            'brands.slug as brand_slug'
        )
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('products.slug', $slug)
            ->firstOrFail();
        return view('catalog.product', compact('product'));
    }
}
