@extends('admin.layouts.header')
@section('content')
<div id="heading">
<h1 class="">Add Category</h1>
</div>
 @if (session()->has('message'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session()->get('message')}}!</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 @endif

<form class="container section-p1" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
  @csrf  
 
    <div class="mb-3">
      <label for="name" class="form-label">Catgeory Name</label>
      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="emailHelp">
      @error('name')
   <span class="text-danger">{{$message}}</span>
@enderror
    </div>
    <button type="submit"  name="submit"class="btn btn-primary">Submit</button>
  </form>
@endsection