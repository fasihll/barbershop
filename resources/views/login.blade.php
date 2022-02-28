@extends('public_layout.template')
@section('title', 'Login | Fasih Barbershop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3 shadow-lg rounded bg-white py-5 login">
            <h2 class="text-center pb-3">Login</h2>
            @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email')
                                                                is-invalid
                                        @enderror" name="email" id="" placeholder="Email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password')
                                                                is-invalid
                                        @enderror" name="password" id="" placeholder="Password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-dark">Login</button>
            </form>
        </div>
    </div>
@endsection
