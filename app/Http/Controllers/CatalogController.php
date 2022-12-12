<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CatalogController extends Controller
{
    public function index()
    {
        $roots = Category::where('parent_id', 0)->get();
        //временно добавил переменную Brands сюда
        $brands = Brand::limit(5)->get();
        //
        return view('front.catalog.index', compact('roots', 'brands'));
    }

    public function category($slug)
    {
        //временно добавил переменную $root сюда
        $roots = Category::where('parent_id', 0)->get();
        $brands = Brand::limit(5)->get();
        //root
        $category = Category::where('slug', $slug)->firstOrFail();
        // получаем товары категории от модели
        $products = $category->getProducts();
//        $products = Product::where('category_id', $category->id)->paginate(12);
        return view('front.catalog.category', compact('category', 'products', 'roots', 'brands'));
    }

    public function brand($slug)
    {
        //временно добавил переменную $root сюда
        $roots = Category::where('parent_id', 0)->get();
        $brands = Brand::limit(5)->get();
        //root
        $brand = Brand::where('slug', $slug)->firstOrFail();

        // получаем товары бренда от модели
        $products = $brand->getProducts();
//        $products = Product::where('brand_id', $brand->id)->paginate(9);
        return view('front.catalog.brand', compact('brand', 'products', 'roots', 'brands'));
    }

    public function product($slug)
    {
        //временно добавил переменную $root сюда
        $roots = Category::where('parent_id', 0)->get();
        $brands = Brand::limit(5)->get();
        //root
        $product = Product::where('slug', $slug)->firstOrFail();
        // получаем от модели категорию и бренд товара
        $category = $product->getCategory();
        $brand = $product->getBrand();
        return view('front.catalog.product', compact('product', 'roots', 'brands', 'category', 'brand'));
    }
}
