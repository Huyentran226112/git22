<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        $param = [
            'products'=> $products
        ];

        return view('shop.includes.main',$param);

    }
    public function home()
    {
        $products = Product::get();
        $param = [
            'products'=> $products
        ];
        return view('shop.home',$param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   //view giỏ hàng
   public function cart()
   {
       return view('shop.includes.cart');
   }
   //thêm vào giỏ hàng
   public function addToCart($id)
   {

   }
   //cập nhật giỏ hàng
   public function update1(Request $request)
   {

   }
   //xóa giỏ hàng
   public function remove(Request $request)
   {
     
   }
}
