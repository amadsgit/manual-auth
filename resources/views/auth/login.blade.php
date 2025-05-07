@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="max-width: 400px;">
    <div class="card-body">
        <h4 class="card-title mb-4 text-center">Login</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Ingat Saya</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <a href="{{ route('password.request') }}" class="d-block text-center mt-3">Forgot Password?</a>
        </form>
    </div>
</div>
@endsection