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

<table border = "1">
<tr>
<td>Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>City Name</td>
<td>Email</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->password }}</td>
</tr>
@endforeach
</table>
</div>
</div>
</div>
@endsection
