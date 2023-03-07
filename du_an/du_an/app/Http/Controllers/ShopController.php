<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Carbon\Carbon;
use Doctrine\Common\Cache\Cache;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    public function checklogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd($arr);
        if (Auth::guard('customers')->attempt($arr)) {

            return redirect()->route('shop.index');
        }
        else {


            return redirect()->route('shop.login');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (isset(Auth::guard('customers')->user()->id)) {
            $user = Auth::guard('customers')->user()->id;
            $carts = session()->get('carts'.$user);
            if (isset($carts[Auth::guard('customers')->user()->id])){
                $carts = array_values($carts);
            }
        } else {
                $carts = [];
            }
        $products = Product::get();
        $param = [
            'products' => $products,
        ];
        return view('shop.includes.main', $param);
    }
    public function home()
    {
        $products = Product::get();
        $param = [
            'products' => $products
        ];
        return view('shop.home', $param);
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
    public function store($id)
    {
        try {
            $product = Product::find($id);
            if (isset(Auth::guard('customers')->user()->id)) {
                $user = Auth::guard('customers')->user()->id;
                $carts = session()->get('carts'.$user);
                if(isset($carts[$id])){
                    $carts[$id]['quantity']++;
                    $carts[$id]['price'] = $product->price;
                }else {
                $carts[$id] = [
                    'id' => $id,
                    'quantity' => 1,
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'quantity_product' => $product->quantity,
                ];
            }
            }
            $expiresAt = Carbon::now()->addDays(30);
            Cache::put('carts'.$user, $carts, $expiresAt);
            return response()->json([
                'code' => 200,
                'message' => 'success',
            ], status:200);
        } catch (\Exception $e) {
            Log::error('message: ' . $e->getMessage() . 'line: ' . $e->getLine() . 'file: ' . $e->getFile());
            return response()->json([
                'code' => 201,
                'message' => 'error',
            ], status:200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('shop.includes.show', compact('product'));
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
        if (isset(Auth::guard('customers')->user()->id)) {
            try {
                $products = Product::search()->get();
                $user = Auth::guard('customers')->user()->id;
                $carts = Cache::get('carts'.$user);
                if ($carts) {

                    $carts = array_values($carts);
                    $param = [
                        'products' => $products,
                        'carts' => $carts,
                    ];
                } else {
                    $carts = [];
                    $param = [
                        'products' => $products,
                        'carts' => $carts,
                    ];
                }
                return view('shop.cart', $param);
            } catch (\Exception$e) {
                Log::error('message: ' . $e->getMessage() . 'line: ' . $e->getLine() . 'file: ' . $e->getFile());
                $carts = [];
                $products = [];
                    $param = [
                        'products' => $products,
                        'carts' => $carts,
                    ];
                return view('shop.includes.cart', $param);
            }
        } else {
            return view('shop.auth.login');
        }
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
    public function category_detail($id)
    {


      $products = Product::where('category_id', $id)->get();
        $params = [
            'products' => $products
        ];
        return view('shop.layouts.categorydetail',$params);

    }
    public function register()
    {
        return view('shop.auth.register');
    }
    public function checkregister(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        try {
            $customer->save();
            return redirect()->route('viewlogin');
        } catch (\Exception $e) {
            Log::error("message:".$e->getMessage());
        }

            if ($request->password == $request->confirmpassword) {
                $customer->save();
                return redirect()->route('shop.index');
            }else{
                return redirect()->route('shop.register');

            }
    }
    public function login()
    {
        return view('shop.auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('shop.login');
      }

}
