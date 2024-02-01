<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;


class ProductController extends Controller
{


    public function index(){

       $products= Product::get();
        return view('products.index',['products'=>$products]);
    }

    public function create(){
        return view ('products.create');
    }

    public function show($id){

        $product=Product::where('id',$id)->first();
        return view ('products.show',['product'=>$product]);
    }

    public function edit($id){

        $product=Product::where('id',$id)->first();
        return view ('products.edit',['product'=>$product]);
    }

    public function update($id,Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'nullable'
           ]);

           $product= Product::where('id',$id)->first();

           if(isset($request->image)){
            $img_name = time().".". $request->image->extension();
            $request->image->move(public_path("products"),$img_name);
            $product->image=$img_name;
           }

       $product->name=$request->name;
       $product->description=$request->description;
       $product->mrp=$request->mrp;
       $product->price=$request->price;
       $product->save();
       return back()->withSuccess('product details update success');
    }

    
    public function store(Request $request){
       // dd($request);
       $request->validate([
        'name'=>'required',
        'description'=>'required',
        'mrp'=>'required|numeric',
        'price'=>'required|numeric',
        'image'=>'required'
       ]);
          
       $img_name = time().".". $request->image->extension();
       $request->image->move(public_path("products"),$img_name);

       $product = new Product();
       $product->name=$request->name;
       $product->description=$request->description;
       $product->image=$img_name;
       $product->mrp=$request->mrp;
       $product->price=$request->price;
       $product->save();
       return back()->withSuccess('products added success');
    }

    public function destroy($id){
      $product = Product::where('id',$id)->first();
      $product->delete();
      return back()->withSuccess('product details deleted success');
    }
    
}
