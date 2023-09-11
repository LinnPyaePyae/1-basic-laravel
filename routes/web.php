<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PhpParser\JsonDecoder;
use Spatie\FlareClient\View;
use Symfony\Component\VarDumper\VarDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//controller
Route::get("/run",[TestController::class,'run'])->name("run");

Route::get("/area-controller/{width}/{height}",[TestController::class,'area']);

Route::get('/', function () {
    return view('index',["myName"=>"lpp","myAge"=>21]);
})->name("page.index");

Route::get("/about-us",fn()=>view("about")->with("name",'lpp'))->name("page.about");

Route::get("/contact-us",fn()=>view("contact"));

Route::view("/contact-us","contact",["phone"=>"099751255"])->name("page.contact");


Route::view("/profile","admin.profile");

Route::get("/profile-get",function(){
    return view("admin.profile");

});


Route::get('greeting',fn()=>"min ga lar par");

Route::get('say-my-name',function(){
    $firstName = 'Linn';
    $lastName = 'Pyae';
    return $firstName.$lastName;
});

Route::get('area/{width}/{height}',function($width,$height){
    return "Area is ".($width*$height)."sqft";
});


Route::get('my-name/{name?}',function($name='abc'){
    return $name;
});


Route::get("fruits",fn()=>
var_dump(['apple','orange','mango']));

Route::get("/products/price-max/{amount}",function($amount){
    $products = file_get_contents('https://fakestoreapi.com/products');
    $productArray = json_decode($products);
    $filterProducts = array_filter($productArray,fn($product)=>$product-> price < $amount);
    // dd(json_decode($products));
    // return $products;
    var_dump($filterProducts);
});

Route::get("/products/price-min/{amount}",function($amount){
    $products = file_get_contents('https://fakestoreapi.com/products');
    $productArray = json_decode($products);
    $filterProducts = array_filter($productArray,fn($product)=>$product-> price > $amount);
    // dd(json_decode($products));
    // return $products;
     dd($filterProducts);
});


Route::get("/products/price-between/{min}/and/{max}",function($min,$max){
    $products = file_get_contents('https://fakestoreapi.com/products');
    $productArray = json_decode($products);
    return print_r($productArray);
    $filterProducts = array_filter($productArray,fn($product)=>$product-> price > $min && $product->price < $max);
    // dd(json_decode($products));
    // return $products;
    return $filterProducts;
});

Route::get("/products/max/{amount}",function($amount){
    // $response = Http::get("http://fakestoreapi.com/products");
    // dd($response->body());
    //  return $response->collect()->where("price","<",$amount);

    return Http::get("http://fakestoreapi.com/products")->collect()->where("price","<",$amount);
});

Route::get("/products/between/{min}/and/{max}",function($min,$max){
    // $response = Http::get("http://fakestoreapi.com/products");
    // dd($response->body());
    //  return $response->collect()->where("price","<",$amount);

    return Http::get("http://fakestoreapi.com/products")->collect()->whereBetween("price",[$min,$max]);
});
