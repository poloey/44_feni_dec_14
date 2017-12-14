@extends('auth-master')
@section('content')
      <div class="card">
        <div class="card-header">
          <h2>Register</h2>
        </div>
        <div class="card-body">
          <form action="/login">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="text" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            
            <div class="form-group">
              <button class="btn btn-warning" type="submit">Register</button>
            </div>
            
          </form>
        </div>
      </div>
@endsection