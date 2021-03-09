@extends('layout.app')
@section('title','Contact Page')
@section('content')
@includeif("layout.header",["home"=>"contact"])
<div class="flex-center position-ref full-height">
<div class="content">
    <div style="text-align: center;">
       <h1>This is Contact Page</h1>
       <a href="{{url('/blog')}}">Blog</a>
       <a href="{{route('dk')}}">Make</a>
       <a href="{{url('/contact')}}">Contact</a>
    </div>
</div>
</div>
@endsection
