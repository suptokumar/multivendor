<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
li a.{{$home}}{
	background: green;
}
</style>
</head>
<body>

<ul>
  <li><a class="home" href="{{url('/')}}">Home</a></li>
  <li><a class="news" href="{{url('/news')}}">News</a></li>
  <li><a class="contact" href="{{url('/contact')}}">Contact</a></li>
  <li><a class="about" href="{{url('/about')}}">About</a></li>
</ul>