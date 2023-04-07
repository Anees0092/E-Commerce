@extends('admin.layouts.header')
<style>
.delete  button i{
    color: red;
    font-size: 20px;
}
.delete button {
    border: none;
}
</style>
@section('content')
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>{{session()->get('danger')}}</strong> 
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <h1 class="text-center section-p1 section-m1">All Categories</h1>
    <a class="btn btn-primary " style="margin-left:75%" href="{{route('category.create')}}">Add Category</a>
    <section id="cart" class="section-p1">
        <table width="100%" >
    <thead style="border:1px solid black">
        <tr>
            <td>Category Name</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody >
    <tr   >
        @foreach ($category as $category)
            
        <td style="padding:5px 0px;">{{ $category['name']}}</td>
        <form action="{{route('category.destroy',$category->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <td class="delete" > <button type="submit" style="background: transparent;"> <i class="fa-solid fa-trash"></i></button> </td>    
        </form>
    </tr>
    @endforeach
   
    </tbody>
        </table>
    </section>
    @endsection

        