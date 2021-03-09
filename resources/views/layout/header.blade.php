<style>
.top_nav li a.{{$home}}{
	background: #1e4478;
}
</style>
<div class="top_nav">
<div>
	<a href="deals" href="deals">Best Deals</a>
</div>
<ul>
  <li><a class="home" href="{{url('/')}}">Home</a></li>
  <li><a class="news" href="{{url('/shop')}}">Shop</a></li>
  <li><a class="contact" href="{{url('/contact')}}">Contact</a></li>
  <li><a class="about" href="{{url('/about')}}">About us</a></li>
  <li><a class="about" href="{{url('/login')}}">Login</a></li>
</ul>
</div>
<div class="fulll_stak_menu">
	<div class="partision">
		
<img src="{{asset('/img/onlineBD.PNG')}}" alt="onlineBD">
	</div>
	<div class="partision form">
		
<form action="{{url('/search/')}}" method="GET">
	<input type="search" autocomplete="off"  placeholder="Search..." id="search" name="search"><input type="submit" name="submit" value="Search">
	<div class="search_result"></div>
</form>
	</div>
<div class="partision">
<div class="user_setting">
	<a href="{{url('/wishlist')}}"><span class="fa fa-heart"></span> <span class="wo">Wishlist</span></a>
	<a href="{{url('/cart')}}"><span class="fa fa-cart-arrow-down"></span>  <span class="wo">My Cart</span></a>
	<a href="{{url('/account')}}"><span class="fa fa-user-circle"></span> <span class="wo">My Account</span></a>
</div>
</div>
</div>