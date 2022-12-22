@extends('backend-master.backend-master')
@section('content')
    <h1>Update Category</h1>
    <form action="{{ route ('update_category', $category->id) }}" method="post" enctype="multipart/form-data" class="form-label">
        @csrf
        <input type="text" class="form-control" name="name" value="{{ $category->name }}" />
        <br/>
        <input type="text" class="form-control" name="description" value="{{ $category->description }}" />
        <br/>
        <input type="file" class="form-control" name="image" value="{{ $category->image }}" />
        <br/>
        <input type="number" class="form-control" name="status" value="{{ $category->status }}" />
        <br/>
        <button type="submit" class="btn btn-primary" name="submit">Update Category</button>
    </form>
@endsection
