<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Config;

class ProductController extends Controller
{
    public function index($brand)
    {
        $products = Product::with('images')->where('brand', '=', $brand)->get();
        return view('product', ['products' => $products]);
    }
}
