<?php

namespace App\Http\Controllers;
use App\Models\Category;
use COM;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        // $categories = $query->orderBy('id ','DESC');
        $param = [
            'categories'=>$categories,
        ];
        return view('admin.categories.index',$param);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        // $category->description = $request->description;
        $category->save();
        alert()->success('Thêm','thành công');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories= Category::find($id);
        return view('admin.categories.edit',compact('categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        alert()->success('sửa','thành công');

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        alert()->success('xóa','thành công');
        return redirect()->route('categories.index');
    }
}
