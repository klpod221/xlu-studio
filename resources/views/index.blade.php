@extends('layouts.app')

@section('content')
    <h1>
        {{ __('Hello, :name', ['name' => 'World']) }}
    </h1>
@endsection
