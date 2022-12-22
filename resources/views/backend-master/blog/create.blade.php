@extends('backend-master.backend-master')
@section('content')
    <h1>Post A Blog</h1>
    <form action="{{ route('store_blog') }}" method="post" enctype="multipart/form-data" class="form-label">
        @csrf
        <select name="category_id" class="form-select">
            <option value="null">---Choose a Category---</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br/>
        <input type="text" class="form-control" name="title" placeholder="Blog Title" />
        <br/>
        <input type="text" class="form-control" name="shorts" placeholder="A short description" />
        <br/>
        <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Blog Description"></textarea>
        <br/>
        <input type="file" class="form-control" name="image" />
        <br/>
        <input type="number" class="form-control" name="status" placeholder="0 or 1" />
        <br/>
        <button type="submit" class="btn btn-primary" name="submit">Post Blog</button>
    </form>
@endsection
