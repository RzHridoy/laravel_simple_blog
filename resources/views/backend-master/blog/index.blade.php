@extends('backend-master.backend-master')
@section('content')
    <h1>Blog Posts</h1>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Shorts</th>
                    <th>Status</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($blogs as $blog)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ Str::limit($blog->shorts, 50, '.') }}</td>
                    <td>{{ $blog->status }}</td>
                    <td>{{ $blog->category_id }}</td>
                    <td>
                        <a href="{{ route('edit_blog', $blog->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route ('delete_blog', $blog->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection