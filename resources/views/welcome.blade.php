@extends('layouts.app')

@include('layouts._partials.header_single_page')

@section('title', 'Access Control')

@section('content')

    <div class="container mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">AccessTrace Manager</h1>
                <p class="col-md-8 fs-4">
                    Using a series of utilities, you can create this jumbotron, just like the one in previous versions of
                    Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.
                </p>
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
            </div>
        </div>
    </div>
@endsection


