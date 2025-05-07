@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Selamat Datang di Dashboard</h3>
            <p class="card-text">Kamu sudah berhasil login.</p>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>
@endsection