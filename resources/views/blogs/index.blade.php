@extends ("layouts.home")
@section("content")
<header>
        <div class="container">
            <div class="row">
                <div class="col-6 text-left py-3">
                    <h1>MY BLOG </h1>
                </div>
                <div class="col-6 text-right py-3">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Add Student</a>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">View</th>
                            <th class="text-center">Edit</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center">{{$blog->id}}</td>
                                <td class="text-center">{{$blog->title}}</td>
                                <td class="text-center"><button class="btn btn-success">View</button></td>
                                <td class="text-center"><button class="btn btn-primary">Edit</button></td>
                                <td class="text-center"><button class="btn btn-danger">Delete</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $blogs->links() }}
                </div>
            </div>       
        </div>
    </div>
@endsection ("content")
