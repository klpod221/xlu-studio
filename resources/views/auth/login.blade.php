@extends('layouts.public')

@section('content')
    <div class="auth-page">
        <h1>This is authentication</h1>

        {{-- @if ($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <div class="alert__item alert--success">{{ $error }}</div>
                @endforeach
            </div>
        @endif --}}

        <form action="{{ route('auth.authenticate') }}" method="post">
            @csrf
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
@endsection
