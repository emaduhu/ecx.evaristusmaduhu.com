@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 m-4">
            <div class="card bg-white">
                <div class="card-header text-lg-center text-bg-custom-primary fw-bold">{{ __('Sign in to your account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label for="email" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control custom-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">

                                <label for="password" class="col-md-4 col-form-label text-md-start fw-bold">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control custom-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

<!--                        <div class="container">-->
                            <div class="row justify-content-center m-2">
                                <div class="col-md-5 form-check">
                                    <input class="form-check-input custom-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-start" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col-md-7">
                                    @if (Route::has('password.request'))
                                    <a class="nav-link fw-bold text-custom-primary text-end" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
<!--                            </div>-->

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row justify-content-center m-1">
                                <button type="submit" class="btn btn-custom-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-md-7">
                            <p class="text-bg-light bg-opacity-10">
                                {{ __('Dont have an account yet?') }}
                            </p>
                        </div>
                        <div class="col-md-5">
                            <a class="nav-link fw-bold text-custom-primary" href="{{ route('register') }}">
                                {{ __('Sign Up') }}
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
