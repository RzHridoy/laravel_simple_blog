@extends('backend-master.backend-master')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Posted Blogs</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Blog Table
        </div>
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
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($blogs as $blog)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->shorts }}</td>
                        <td>{{ $blog->status }}</td>
                        <td>{{ $blog->category_id }}</td>
                        <td>{{ $blog->created_at}}</td>
                    </tr>
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection