@extends('frontend-master.frontend-master')
@section('title', 'Post')
@section('content')

<div align="center">
    <h3>Read the blog: {{$viewblog->title}}</h3>   
    <p class="text-muted">{{$viewblog->created_at}}</p><hr/>
</div>

<div class="container">
    <img src="{{ asset('/') }}{{$viewblog->image}}" class="img-fluid rounded-top mx-auto mt-2" alt="" width="100%" height="400px">
    <h4>{{ $viewblog->shorts}}</h4>
    <br/>
    <p>{{ $viewblog->description }}</p>
</div>

@endsection