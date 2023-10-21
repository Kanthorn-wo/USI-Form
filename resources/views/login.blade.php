@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card mt-5">
      <div class="card-header">
        <h4>Login</h4>
      </div>
      <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert" id="alert">

          <div id="success">{{ session('success') }}</div>

        </div>
        @endif
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection