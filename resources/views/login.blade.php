@extends('page')
@section('title', 'Login')
@section('content')
<div clss="container">

<form action="{{route('login.post')}}" method="POST">

@csrf

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="mejl" >
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="sifra">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<a href="registration">Registration</a>
</div>
@endsection