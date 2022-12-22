@extends('frontend-master.frontend-master')

@section('content')
<h1>Log Into Account</h1>
    <form action="" method="post" class="form-label">
        @csrf
        <input type="email" name="email" placeholder="User Email" class="form-control"/>
        <br/>
        <input type="password" name="password" placeholder="Password" class="form-control"/>
        <br/>
        <button type="submit" class="btn btn-primary" class="form-control">Log In</button>
    </form>
@endsection