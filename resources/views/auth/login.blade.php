@extends('layouts.app')
<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
@section('css')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
@endsection
@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-1 col-sm-4 vol-md-2 m-auto">
            <div class="logo">
                <img src="{{asset('/images/spc_logo.png')}}" alt="" srcset="">
                <div class="school-txt">
                    <h1 class="text-center">San Pedro College</h1>
                </div>  
            </div>
           
            <div class="card border-0 shadow-sm mx-auto" >
                <div class="card-body"  >
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header text-center mb-5"><h2>LogIn</h2></div>
                        <div class="row mb-3">
                           
                            <div class="col-md-20  py-2">
                                <input id="email" type="email" placeholder="Username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <div class="col-md-20">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row-mb-0">
                            <div class="d-grid gap-3 col-11 mx-auto ">
                                <button type="submit" class=" btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        <div>
                       @if (Route::has('password.request'))
                                    <a class="mb-2 btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forget your password?') }}
                                    </a>
                                @endif
                            </div>
                            <div><h2 class="or text-center">-OR-</h2></div>
                            <div class="mb-4">
                                <div class="d-grid gap-3 col-11 mx-auto">
                                    <button type="btn" class=" btn btn-outline-primary " >
                                        Create Account
                                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
