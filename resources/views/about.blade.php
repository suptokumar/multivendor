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
        	@if (!empty($name))
           		<h1>This is {{$name}} Page</h1>
           	@else
           		<h1>This is Blog Page</h1>
           		@foreach ($lan as $l)
           			{{ $loop->index }} : {{ $l }}
           		@endforeach

           		@includeif("footer",["hasi"=>"Hahaha"])
           	@endif
        </div>
</div>
</div>


</body>
</html>