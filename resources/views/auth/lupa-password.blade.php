@extends('layouts.app')

@section('content')
<div class="card mx-auto" style="max-width: 400px;">
    <div class="card-body">
        <h4 class="card-title mb-4 text-center">Lupa Password</h4>

        @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Kirim Link Reset Password</button>
        </form>
    </div>
</div>
@endsection