<h1>All Your Posts Here</h1>
<a href="{{route("home.create")}}"><h3>Create Post</h3></a>
<hr>
@foreach($posts as $posts)
    <h2>{{$posts->title}}</h2>
    <h3>{{$posts->body}}</h3>
    <hr>
@endforeach
