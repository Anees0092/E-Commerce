@extends('layouts.apps')
@extends('partials.nav')

@section('content')

    <section id="shop-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off! </p>
    </section>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/images/products/{{$products->image}}" width="100%" id="mainImage"alt="">
        </div>
        <div class="single-pro-details"> 
            <h4>{{$products->name}} </h4>
            <h2>{{$products->price}}</h2>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XL</option>
                <option value="">XXL</option>
                <option value="">Small</option>
                <option value="">Large</option>
            </select>
            <input type="number" value="1" name="" id="">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
                <span>{{$products->desc}}</span>
        </div>
    </section>

    <section id='product-1' class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Colllerction New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="{{ asset('img/products/f1.jpg') }}" alt="">
                <div class="des">
                    <span>Addidas</span>
                    <h5>Cartoon T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ asset('img/products/f2.jpg') }}" alt="">
                <div class="des">
                    <span>Addidas</span>
                    <h5>Cartoon T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ asset('img/products/f3.jpg') }}" alt="">
                <div class="des">
                    <span>Addidas</span>
                    <h5>Cartoon T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro">
                <img src="{{ asset('img/products/f4.jpg') }}" alt="">
                <div class="des">
                    <span>Addidas</span>
                    <h5>Cartoon T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
          
           
            
            
        </div>
    </section>
    {{-- footer --}}

@endsection
