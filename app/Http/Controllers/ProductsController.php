<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;//para poder usar la base de datos
use App\Product;



class ProductsController extends Controller
{
    
    public function getProducts(Request $request){
    	$host = $request->getSchemeAndHttpHost();
    	$token='91c3f6d839b1b97ddfa4138c4da9a2ff576bb5842848dcec602164a257979d48';
    	$client = new \GuzzleHttp\Client();
    	//$response = $client->request('GET', 'http://localhost:81/api/products?api_token='.$token);

    	$response = $client->request('GET', $host.'/api/products', [
		    'headers' => [
		        'Authorization' => 'Bearer '.$token,
		        'Accept' => 'application/json',
		    ],
		]);
		
    	$datos=json_decode($response->getBody());
    	return view('productos',["datos"=>$datos]);
    }


    public function delete(Request $request){
        $id=$request["id"];    
        $res =Product::destroy($id);
    return view("home");
    }
}
