<style>
.top_nav a.{{$home}}{
	background: #1e4478;
}
</style>
<div class="top_nav">
<div>
@if(Auth::check() && Auth::user()->role=='Admin')
<a class="dashboard" href="{{url('/dashboard')}}">{{ __('Dashboard') }}</a></li>
@else
<a class="deals" href="{{url('/deals')}}">{{ __('Best Deals') }}</a>
@endif
</div>
<ul>
  <li><a class="home" href="{{url('/')}}">{{ __('Home') }}</a></li>

  <li><a class="shop" href="{{url('/shop')}}">{{ __('Shop') }}</a></li>
  <li><a class="contact" href="{{url('/contact')}}">{{ __('Contact') }}</a></li>
  <li><a class="about" href="{{url('/about')}}">{{ __('About us') }}</a></li>
  <li><a class="login" href="Javascript:void(0)">{{ __('Language') }} <span class="glyphicon glyphicon-chevron-down"></span> </a>
<ul class="submit_menu">
	<li><a class="english" href="{{url('/language/en')}}">{{ __('English') }}</a></li>
  	<li><a class="bangla" href="{{url('/language/bn')}}">{{ __('Bangla') }}</a></li>
</ul>
  </li>
</ul>
</div>
<div class="fulll_stak_menu">
	<div class="partision">
		
<img src="{{asset('/public/img/onlineBD.PNG')}}" alt="onlineBD">
	</div>
	<div class="partision form">
		
<form action="{{url('/search/')}}" method="GET">
	<input type="search" autocomplete="off"  placeholder="{{ __('Search') }}..." id="search" name="search"><input type="submit" name="submit" value="{{ __('Search') }}">
	<div class="search_result"></div>
</form>
	</div>
<div class="partision">
<div class="user_setting">
	<a href="{{url('/wishlist')}}"><span class="glyphicon glyphicon-heart"></span> <span class="wo">{{ __('Wishlist') }}</span></a>
	<a href="{{url('/checkout')}}"><span class="glyphicon glyphicon-shopping-cart"></span>  <span class="wo">{{ __('Checkout') }}</span></a>
	<a href="@if(Auth::check())
	{{url('/logout')}}
	@else
	{{url('/login')}}
	@endif"><span class="glyphicon glyphicon-user"></span> <span class="wo">@if(Auth::check())
	{{__('My Account')}}
	@else
	{{__('Login')}}
	@endif</span></a>
</div>
</div>
</div>