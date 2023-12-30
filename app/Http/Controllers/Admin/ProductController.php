<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list(){
        $products = Product::latest()->paginate(10);
        return view('Admin.products.list',compact('products'));
    }
    public function create(){
        $catagories = Catagory::all();
 return view('Admin.products.create',compact('catagories'));


    }
    public function save(ProductSaveRequest $request){
      $input = $request->validated();
    //  return $input;

      if($request->hasFile('image')){
        $extension= $request->image->extension();
        $filename=Str::random(6)."_".time()."_product.".$extension;
       $request->image->storeAs('images',$filename);
       $input['image']=$filename;
      }

      Product::create($input);
      return redirect()->route('admin.product.create')->with('meassage','Product Saved sucessfully');

      // return request()->all();
    }

    public function edit($id){
        $product=Product::find($id);
        $catagories=Catagory::all();
        return view('Admin.products.update',compact('product','catagories'));


    }
    public function update(ProductSaveRequest $request){
        $input=$request->validated();
        $product=Product::find($request->id);
        // return $product;
        if($request->hasFile('image')){
            Storage::delete('images/'.$product->image);
            $extension= $request->image->extension();
            $filename=Str::random(6)."_".time()."_product.".$extension;
           $request->image->storeAs('images',$filename);
           $input['image']=$filename;

        }

        $product->update($input);
        return redirect()->route('admin.product.list')->with('meassage','Product updated sucessfully');



    }
    public function delete($id){

        $product=Product::find($id);
        if(!empty($product)){
            Storage::delete('images/'.$product->image);
        }
        $product->delete();
        return redirect()->route('admin.product.list')->with('meassage','Product Saved sucessfully');


    }
}
