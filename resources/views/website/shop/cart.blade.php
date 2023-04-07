@extends('layouts.apps')
@extends('partials.nav')

@section('content')
<section id="about-header" class="page-header">
    <h2>#cart</h2>
     <p>Leave a message.Our Team will contact you.</p>
</section>
<section id="cart" class="section-p1">
    <table width="100%">
<thead>
    <tr>
        <td>Remove</td>
        <td>Image</td>
        <td>Product</td>
        <td>Price</td>
        <td>Qunatity</td>
        <td>Subtotal</td>
    </tr>
</thead>
<tbody>
<tr>
    <td><a href=""> <i class="far fa-times-circle"></i> </a></td>
    <td><img src="{{asset('img/products/f1.jpg')}}" alt=""></td>
    <td>Cartoon Shirt</td>
    <td>$123.22</td>
    <td><input type="number" value="1"></td>
    <td>$324.34</td>
</tr>
<tr>
    <td><a href=""> <i class="far fa-times-circle"></i> </a></td>
    <td><img src="{{asset('img/products/f2.jpg')}}" alt=""></td>
    <td>Cartoon Shirt</td>
    <td>$123.22</td>
    <td><input type="number" value="1"></td>
    <td>$324.34</td>
</tr>
<tr>
    <td><a href=""> <i class="far fa-times-circle"></i> </a></td>
    <td><img src="{{asset('img/products/f3.jpg')}}" alt=""></td>
    <td>Cartoon Shirt</td>
    <td>$123.22</td>
    <td><input type="number" value="1"></td>
    <td>$324.34</td>
</tr>
</tbody>
    </table>
</section>
<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Your Coupon"  name="coupon" id="">
            <button class="normal">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Card Subtotal</td>
                <td>$342</td>
            </tr>
            <tr>
                <td>Shippinf</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td>$2342</td>
            </tr>
        </table>
        <button class="normal">Proceed To Checkouts</button>
    </div>
</section>

@endsection