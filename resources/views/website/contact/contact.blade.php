@extends('layouts.apps')
@extends('partials.nav')

@section('content')
<section id="about-header" class="page-header">
    <h2>#let's_talk</h2>
     <p>Leave a message.Our Team will contact you.</p>
</section>
<section id="contact-details" class="section-p1">
<div class="details">
    <span>GET IN TOUCH</span>
    <h2>Visit one of our shop location</h2>
    <div>
        <li>
            <i class="fal fa-map"></i>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </li>
        <li>
            <i class="fas fa-phone-alt"></i>
        <p>051-112323443</p>
        </li>
        <li>
            <i class="far fa-envelope"></i>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
        </li>
        <li>
            <i class="far fa-clock"></i>
        <p>Monday to Saturday: 9:00am to 16.pm</p>
        </li>
    </div>
</div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26587.085227748405!2d73.05151994999999!3d33.595296850000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df94834d87f5a3%3A0x506e17bedd22f2e7!2sSaddar%2C%20Rawalpindi%2C%20Punjab%2046000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1675968467975!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</section>
<section id="form-details" class="section-p1">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" name="name" placeholder="Your Name" id="">
        <input type="email" name="email" id="">
        <input type="text" name="subject" placeholder="Your Subject" id="">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button class="normal">Submit</button>
    </form>
</section>

@endsection