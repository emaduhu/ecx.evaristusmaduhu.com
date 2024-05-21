@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 m-4">
            <div class="card bg-white">
                <div class="card-header text-lg-center text-bg-custom-primary fw-bold">{{ __('Create Access Account')
                    }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @method('POST')
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label for="first_name" class="col-md-12 col-form-label text-md-start fw-bold">{{
                                    __('First Name') }}</label>
                                <input id="first_name" type="first_name"
                                       class="form-control custom-input @error('first_name') is-invalid @enderror"
                                       name="first_name" value="{{ old('first_name') }}" required
                                       autocomplete="first_name" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="col-md-12 col-form-label text-md-start fw-bold">{{
                                    __('Last Name') }}</label>
                                <input id="last_name" type="last_name"
                                       class="form-control custom-input @error('last_name') is-invalid @enderror"
                                       name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"
                                       autofocus>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 input-group ">
                                <label for="phone" class="col-md-12 col-form-label text-md-start fw-bold">{{ __('Mobile
                                    Number') }}</label>
                                <span class="input-group-text" id="basic-addon1">+255</span>
                                <input id="phone" type="tel" maxlength="9" minlength="9"
                                       class="form-control custom-input input-group-addon @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label for="email" class="col-md-12 col-form-label text-md-start fw-bold">{{ __('Email
                                    Address (Cooperate Email)') }}</label>

                                <input id="email" type="email"
                                       class="form-control custom-input @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label for="password" class="col-md-12 col-form-label text-md-start fw-bold">{{
                                    __('Password') }}</label>
                                <input id="password" type="password"
                                       class="form-control custom-input @error('password') is-invalid @enderror"
                                       name="password" value="{{ old('password') }}" required autocomplete="password"
                                       autofocus>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-md-12 col-form-label text-md-start fw-bold">{{
                                    __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password"
                                       class="form-control custom-input @error('password-confirm') is-invalid @enderror"
                                       name="password_confirmation" value="{{ old('password-confirm') }}" required
                                       autocomplete="new-password" autofocus>
                                @error('password-confirm')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                                    {{ __('Already have a ECX access account?') }}
                                </p>
                            </div>
                            <div class="col-md-5">
                                <a class="nav-link fw-bold text-custom-primary" href="{{ route('login') }}">
                                    {{ __('Go to Login') }}
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
