@extends('backend-master.backend-master')
@section('content')
    <h1>Create Category</h1>
    <form action="{{ route('store_category') }}" method="post" enctype="multipart/form-data" class="form-label">
        @csrf
        <input type="text" class="form-control" name="name" placeholder="Category Name" />
        <br/>
        <input type="text" class="form-control" name="description" placeholder="Category Description" />
        <br/>
        <input type="file" class="form-control" name="image" />
        <br/>
        <input type="number" class="form-control" name="status" placeholder="0 or 1" />
        <br/>
        <button type="submit" class="btn btn-primary" name="submit">Create Category</button>
    </form>
@endsection
