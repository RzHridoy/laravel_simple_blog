@extends('frontend-master.frontend-master')
@section('title', 'Category Details')
@section('content')
<h3>Detail: {{$viewcategory->name}} Category</h3>
<p class="text-muted">{{$viewcategory->created_at}}</p>
<div class="container"></div>
    <div class="row mx-auto">
        <div class="col-md-6" align="center">
            <img src="{{asset('/')}}{{$viewcategory->image}}" alt="" width="100%" height="400px"/>
        </div>
        <div class="col-md-6">
            <h3 class="mt-5">{{ $viewcategory->description }}</h3>
        </div>
    </div>
    <div class="card-body mx-3 my-5">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Shorts</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($blogs as $blog)    
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $blog->id }}</td>
                    <td><a href="{{ route('blog_post', $blog->id) }}">{{ $blog->title }}</a></td>
                    <td>{{ $blog->shorts }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection