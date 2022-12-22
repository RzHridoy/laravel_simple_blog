@extends('backend-master.backend-master')
@section('content')
    <h1>Update A Blog</h1>
    <form action="{{ route('update_blog', $blog->id) }}" method="post" enctype="multipart/form-data" class="form-label">
        @csrf
        <select name="category_id" class="form-select">
            <option value="null">---Choose a Category---</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br/>
        <input type="text" class="form-control" name="title" value="{{ $blog->title }}" />
        <br/>
        <input type="text" class="form-control" name="shorts" value="{{ $blog->shorts }}" />
        <br/>
        <textarea class="form-control" name="description" cols="30" rows="10" value="{{ $blog->description}}""></textarea>
        <br/>
        <input type="file" class="form-control" name="image" value="{{ $blog->image }}" />
        <br/>
        <input type="number" class="form-control" name="status" value="{{ $blog->status }}" />
        <br/>
        <button type="submit" class="btn btn-primary" name="submit">Update Blog</button>
    </form>
@endsection
