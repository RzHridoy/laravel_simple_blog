@extends('backend-master.backend-master')

@section('content')
<h1>Create User</h1>
    <form action="{{ route('store_user')}}" method="post" class="form-label">
        @csrf
        <input type="text" name="name" placeholder="User Name" class="form-control"/>
        <br/>
        <input type="email" name="email" placeholder="User Email" class="form-control"/>
        <br/>
        <input type="password" name="password" placeholder="Password" class="form-control"/>
        <br/>
        <button type="submit" class="btn btn-primary" class="form-control">Create</button>
    </form>
@endsection