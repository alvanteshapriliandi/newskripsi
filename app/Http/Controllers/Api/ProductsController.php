<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transformers\ProductTransformer;
use App\User;
use App\Product;
use Auth;
use DB;

class ProductsController extends Controller
{
    //
	public function getProducts(Request $request, Product $product){
      // $product = $product->all();
    $product = db::select('');

  //     // return $product;
  //     return fractal()
  //       ->collection($product)
  //       ->transformWith(new ProductTransformer)
  //       ->toArray();
		// // // return 'ok';
      return 
      return response()->json($product);
    }

}
