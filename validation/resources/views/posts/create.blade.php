<h1>Create Post</h1>
<form action="{{route("home.store")}}" method="post">
    @csrf
    <input type="text" name="title" value="{{old("title")}}" placeholder="Enter Title" class="@error("title") @enderror">
    <br>
    @error("title")
    {{$message}}
    @enderror
    <br>
    <input type="text" name="body" value="{{old("body")}}" placeholder="Enter Body" class="@error("body") @enderror">
    <br>
    @error("body")
    {{$message}}
    @enderror
    <br>
    <button type="submit">Submit</button>
</form>
