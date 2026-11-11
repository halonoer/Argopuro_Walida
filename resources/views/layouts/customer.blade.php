@extends('layouts.app')

@section('layout')

@include('components.customer.navbar')

<main>
    @yield('content')
</main>

@include('components.customer.footer')

@endsection