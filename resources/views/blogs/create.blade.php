@extends("layouts.home") @section("content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="text-center py-4">
                <h2>Add New Blogs</h2>
            </div>
        </div>
        <div class="col-12">
            <form action="{{route('blogs.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="blog_title">Blog Tilte</label>
                    <input name="title" type="text" class="form-control" id="blog_title" aria-describedby="titleHelp" placeholder="Blog title" value="{{old('title')}}"> @error("title")
                    <small id="blog_title" class="form-text text-danger">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="blog_body">Blog body</label>
                    <textarea name="body" class="form-control" id="blog_body" cols="30" rows="10">{{ old('body')}}</textarea> @error("body")
                    <small id="blog_body" class="form-text text-danger">{{$message}}</small> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection("content")