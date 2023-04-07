@extends('admin.layouts.header')
<style>
.delete a i{
    color: red;
    font-size: 20px;

}
.edit a i{
    color: rgb(240, 240, 0);
    font-size: 20px;

}
</style>
@section('content')
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>{{session()->get('danger')}}</strong> 
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <h1 class="text-center section-m1">Products Page</h1>
    <a class="btn btn-primary " style="margin-left:75%" href="{{route('products.create')}}">Add Product</a>
    <section id="cart" class="section-p1">
        <table width="100%" >
    <thead style="border:1px solid black">
        <tr>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Description</td>
            <td>Category</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody  >
    <tr >
        @foreach ($products as $product)
            
        <td><img src="/images/products/{{$product->image}}" height="100px" width="100px"alt=""></td>
        <td>{{ $product['name']}}</td>
        <td>${{ $product['price']}}</td>
        <td>{{ $product['desc']}}</td>
        <td>{{ $product->category->name}}</td>
        <td class="delete"><a  href="{{url('deleteproduct',$product->id)}}"> <i class="fa-solid fa-trash "></i> </a></td>
        <td  class="edit"><a href="{{url('editproduct',$product->id)}}"><i class="fa-solid fa-pen-to-square"></i> </a></td>

            
    </tr>
    @endforeach
   
    </tbody>
        </table>
    </section>
    @endsection

        