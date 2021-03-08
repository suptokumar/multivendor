<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<style>
.full-height {
    height: 96vh;
    font: 35px arial;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}
</style>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div style="text-align: center;">
           <h1>This is Home Page</h1>
           <a href="{{url('/blog')}}">Blog</a>
           <a href="{{url('/contact')}}">Contact</a>
        </div>
</div>
</div>


</body>
</html>