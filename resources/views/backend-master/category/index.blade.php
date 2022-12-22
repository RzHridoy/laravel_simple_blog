@extends('backend-master.backend-master')
@section('content')
    <h1>Categories</h1>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($categories as $category)    
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status }}</td>
                    <td>
                        <a href="{{ route('edit_category', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('delete_category', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection