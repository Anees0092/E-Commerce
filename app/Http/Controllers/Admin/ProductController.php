<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $category = Category::all();
        return view('admin.products.create',compact('products','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id'=>'required',
            'name'=>'required',
            'desc'=>'required',
            'price'=>'required|numeric|between:1,999999999999999999999999999',
            'image'=>['required','image'],
        ]);
      
        $data = new Product;
        $image = $request->image;
        $imageName = uniqid(). '.' . $image->getClientOriginalExtension();
        $imagePath = public_path('/images/products');
        $image->move($imagePath,$imageName);
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->desc= $request->desc;
        $data->price = $request->price;
        $data->name = $request->name;
        $data->image = $imageName;
        $data->save();
        return redirect()->back()->with('message',"Product Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $data = Product::find($id);
        return view('admin.products.edit',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
            $data = Product::find($id);
            $data->name = $request->name;
            $data->desc = $request->desc;
            $data->price = $request->price;
            $data->category_id = $request->category_id;
            $image = $request->image;
            if($image){
                $imageName = uniqid(). ' . ' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/products');
                $image->move($imagePath,$imageName);
                $data->image = $imageName;
            }
            
            $data->save();
            return redirect('/products')->with('message',"Product Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('danger',"Product Deleted");
    }
}
