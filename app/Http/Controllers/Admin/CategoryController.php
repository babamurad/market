<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $categories = Category::orderby('id', 'DESC')->paginate(6);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title' => 'required',
        ]);

        $category = new Category([
            'title' => $request->title,
            'parent_id' => $request->parent_id,
            'desc' => $request->desc,
        ]);
        $category->save();
        $request->session()->flash('success', 'Категория добавлена!');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        $categories = Category::where('id', '<>',  $id )->get();

        return view('admin.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $category = Category::findOrFail($id);
//        dd($request->parent_id);
        $category->update([
            'title' => $request->title,
            'desc' => $request['desc'],
            'parent_id' => $request->parent_id,
        ]);
//        dd($category);
        $request->session()->flash('success', 'Категория изменена!');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if (isset($category)){
            $category->destroy($id);
            $msg = 'Категория удалена!';
        } else {
            $msg = 'Категория не найдена!';
        }
        return redirect()->route('categories.index')->with($msg);
    }

    public function sort($fieldName)
    {
        $categories = Category::orderby($fieldName, 'DESC')->paginate(5);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function search(Request $request)
    {
        $stext = $request->stext;
        if (isset($stext)){
            $categories = Category::where('title', 'LIKE', '%' . $stext . '%')->paginate(4);
        } else {
            $categories = Category::orderby('id', 'DESC')->paginate(4);
        }

        return view('admin.categories.index', compact('categories'));
    }
}
