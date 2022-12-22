@extends('frontend-master.frontend-master')
@section('title', 'Category')
@section('content')

<h1 class="pt-3">All Categories</h1>
<section class="p-5">
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                
            <div class="col-md-4 my-3">
                <div class="card">
                    <img src="{{ asset('/') }}{{ $category->image }}" alt="{{$category->image}}" width="100%" height="300px" class="mx-auto mt-2"/>
                    <div class="card-body">
                        <h3>{{ $category->name }}</h3>
                        <p>{{ $category->description }}</p>
                        <a href="{{ route('category_detail', $category->id) }}" class="btn btn-primary btn-sm">See Catrgory Blogs</a>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted">{{$category->created_at}}</h6>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection