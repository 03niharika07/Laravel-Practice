<h1>Home Page </h1>
<a href="/" target="_main">Welcome Page</a>
<!-- target="_main" allows to open in new tab -->
<br>

<a href="/about/neha">About Page</a>
<br>

<h1>{{$name}}</h1>
<!-- <h1>{{rand()}}</h1> -->
<!-- blade template function that randomly generate numbers -->

// Array
<h2>{{$users[0]}}</h2>
<h2>{{$users[1]}}</h2>
<h2>{{$users[2]}}</h2>
<br><br>

// If-else statement
@if($name=='Neha')
<h2>This is Neha</h2>
@elseif($name=='Niharika')
<h2>This is Niharika</h2>
@else
<h2>other user</h2>
@endif
