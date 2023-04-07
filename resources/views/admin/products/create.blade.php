@extends('admin.layouts.header')
@section('content')
<div id="heading">
<h1 class="">Add Product</h1>
</div>
 @if (session()->has('message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session()->get('message')}}!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 @endif

<form class="container section-p1" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
  @csrf  
  <div class="mb-3">
        <label for="categor" class="form-label">Category</label>
        <select name="category_id" id="" class="form-select">
          <option value="">Select Category</option>
  @foreach ($category as $category)
  <option value="{{ $category->id}}">{{ $category['name']}}</option>
  @endforeach
</select>
@error('category')
   <span class="text-danger">{{$message}}</span>
@enderror
      </div>
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="emailHelp">
      @error('name')
   <span class="text-danger">{{$message}}</span>
@enderror
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Product Desription</label>
      
        <input type="text" name="desc" value="{{old('desc')}}"  class="form-control" id="">
        @error('desc')
      <span class="text-danger">{{$message}}</span>
      @enderror
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Product Price</label>
        <input type="text" value="{{old('price')}}" class="form-control" id="price" name="price"  aria-describedby="emailHelp">
        @error('price')
   <span class="text-danger">{{$message}}</span>
@enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Product Image</label>
        <input type="file" value="{{old('image')}}" class="form-control" id="image" name="image" aria-describedby="emailHelp">
        @error('image')
   <span class="text-danger">{{$message}}</span>
@enderror
      </div>
    
    <button type="submit"  name="submit"class="btn btn-primary">Submit</button>
  </form>
@endsection