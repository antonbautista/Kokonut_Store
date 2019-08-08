<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;//para poder usar la base de datos
use App\Product;



class ApiProductsController extends Controller
{
 	
    public function getProducts(Request $request){
    	$producto = Product::Productos();
    	return response()
    			->json($producto);
    }


    
    public function setProducts(Request $request){
    	

    	$producto = new Product();
    	$producto->product_name=$request['product_name'];
        $producto->description=$request['description'];
        $producto->total=$request['total'];
        $producto->created_at=now();
        $producto->updated_at=now();
        $res=$producto->save();
        
    	return response()->json(["status"=>$res]);
 		//   
    }
}
