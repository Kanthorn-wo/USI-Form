@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card mt-5">
      <div class="card-header">
        <h4>Register</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('register.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="username">ชื่อบัญชีผู้ใช้งาน</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required
              autocomplete="username" autofocus required>
            @error('username')
            <div class="invalid-feedback d-block">{{ $errors->first('username') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="fname">ชื่อจริง</label>
            <input type="text" class="form-control" name="fname" value="{{ old('fname') }}" required
              autocomplete="fname" autofocus required>
            @error('fname')
            <div class="invalid-feedback d-block">{{ $errors->first('fname') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="สname">นามสกุล</label>
            <input type="text" class="form-control" name="lname" value="{{ old('lname') }}" required
              autocomplete="lname" autofocus required>
            @error('lname')
            <div class="invalid-feedback d-block">{{ $errors->first('lname') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" class="form-control" name="password" required>
            @error('password')
            <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="confirm-password">ยืนยันรหัสผ่าน</label>
            <input type="password" class="form-control" name="confirm-password" required>
            @error('confirm-password')
            <div class="invalid-feedback d-block">{{ $errors->first('confirm-password') }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <select class="form-control" name="role">
              <option value="user">User</option>
              <option value="admin">Admin</option>
              <option value="staff">Staff</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection