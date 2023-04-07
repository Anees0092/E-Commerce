<section id="header">
  <a class="navbar-brand" href="#"><i class="fa-sharp fa-solid fa-crown"></i>
    Commerce Crown</a>
    <div>
      <ul id="navbar">
        <li><a  href="/">Home</a></li>
        <li><a  href="/shop">Shop</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a  href="{{ route('register') }}">Register</a></li>
        
        <li id="lg-bag"><a href="/cart"><i class="fa-solid fa-bag-shopping"></i></a></li>
         <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
      </ul>
    </div>
    <div id="mobile">
      <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>