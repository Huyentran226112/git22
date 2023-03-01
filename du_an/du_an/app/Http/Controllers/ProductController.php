<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $param = [
            'products'=>$products
        ];
        return view('admin.products.index',$param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        $param = [
            'categories' => $categories
        ];
        return view('admin.products.create', $param);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'public/assets/product/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $product->image = $new_image;
            $data['product_image'] = $new_image;
        }
        alert()->success('thêm','thành công');
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productshow = Product::findOrFail($id);
        $param =[
            'productshow'=>$productshow,
        ];
        return view('admin.products.show',  $param );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories=Category::get();
        $param = [
            'product' => $product ,
            'categories' => $categories
        ];

        return view('admin.products.edit' , $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $get_image=$request->image;
        if($get_image){
            $path='public/assets/product/'.$product->image;
            if(file_exists($path)){
                unlink($path);
            }
        $path='public/assets/product/';
        $get_name_image=$get_image->getClientOriginalName();
        $name_image=current(explode('.',$get_name_image));
        $new_image=$name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $product->image=$new_image;
        // dd($product);

        $data['product_image']=$new_image;
        }
        alert()->success('sửa','thành công');
        $product->save();
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        alert()->success('xóa','thành công');
        return redirect()->route('products.index');
    }
}
