@extends('layouts.apps')
@extends('partials.nav')

@section('content')

    <section id="shop-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off! </p>
    </section>
    <section id='product-1' class="section-p1">
       
        <div class="pro-container">
            @foreach ($products as $product)

            <div class="pro">
                <img src="images/products/{{$product->image }}" alt="">
                <div class="des">
                    <span>{{$product->name}}</span>
                    <a href="{{url('singleproduct',$product->id)}}" style="text-decoration: none
                    "><h5>{{$product->desc}}</h5></a>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>{{$product->price}}</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>

          
            @endforeach
            
        </div>
        <div class=" container row ">
            {{ $products->links() }}
        </div>
    </section>
    {{-- footer --}}

@endsection
