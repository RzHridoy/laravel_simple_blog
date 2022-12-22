@extends('frontend-master.frontend-master')
@section('title', 'Blog Home')
@section('content')

<div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
    <ol class="carousel-indicators">
        <li class="active" data-bs-target="#slider" data-bs-slide-to="0"></li>
        <li data-bs-target="#slider" data-bs-slide-to="1"></li>
        <li data-bs-target="#slider" data-bs-slide-to="2"></li>
        <li data-bs-target="#slider" data-bs-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('/')}}frontend-assets/slide/slide1.jpg" alt="slide 1" class="w-100" height="450px" />
        </div>
        <div class="carousel-item">
            <img src="{{asset('/')}}frontend-assets/slide/slide2.jpg" alt="slide 2" class="w-100" height="450px" />
        </div>
        <div class="carousel-item">
            <img src="{{asset('/')}}frontend-assets/slide/slide3.jpg" alt="slide 3" class="w-100" height="450px" />
        </div>
        <div class="carousel-item">
            <img src="{{asset('/')}}frontend-assets/slide/slide4.jpg" alt="slide 4" class="w-100" height="450px" />
        </div>
    </div>
</div>
<hr/>
<h1 class="pt-3" align="center">Blog Posts</h1>
<section class="p-3">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                
            <div class="col-md-4 my-3">
                <div class="card">
                    <img src="{{ asset('/') }}{{ $blog->image }}" alt="{{$blog->image}}" width="100%" height="300px" class="mx-auto mt-2"/>
                    <div class="card-body">
                        <h3>{{ Str::limit($blog->title, 18, '.') }}</h3>
                        <p>{{ Str::limit($blog->shorts, 35, '>>>') }}</p>
                        <a href="{{ route('blog_post', $blog->id) }}" class="btn btn-primary btn-sm">Read Blog</a>
                    </div>
                    <div class="card-footer">
                        <h6 class="text-muted">{{$blog->created_at}}</h6>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>

@endsection