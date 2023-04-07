@extends('layouts.apps')
@extends('partials.nav')

@section('content')
<section id="about-header">
    <h2>#readus</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.  </p>
</section>
<section id="about-head" class="section-p1">
<img src="{{asset('img/about/a6.jpg')}}" alt="">
<div>
    <h2>Who We Are?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum laudantium iure enim! Amet officia provident tenetur deleniti blanditiis fugiat inventore tempora voluptatem error obcaecati fugit magnam sequi rerum quisquam placeat enim autem, dignissimos beatae pariatur. Temporibus nisi quae autem, ipsum, deserunt ut qui molestiae harum enim voluptate totam quam maiores!</p>

    <abbr title="">Create Stunnung images with our collection of brands</abbr>
    <br>
    <marquee bgcolor="#ccc" loop="-1" width="100% " scrollamount="5">Create Stunnung images with our collection of brands</marquee>

</div>
</section>
<section id="about-app" class="section-p1">
<h1>Download Our <a href="">App</a> </h1>
<div class="video">
    <video autoplay muted loop src="{{asset('img/about/1.mp4')}}"></video>
</div>
</section>
@endsection