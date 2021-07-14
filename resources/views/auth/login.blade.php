@extends('layouts.app')
@section('div')

    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title" style="font-weight: bold;color: #ff9b44">{{ __('Login') }}</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="{{ route('home') }}"><img src="{{asset('assets/img/logo2.png')}}" alt="Focus Technologies"></a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Email') }}</label>
                                <input class="form-control floating @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            </div>
                            @error('email')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Password') }}</label>
                                <input class="form-control floating @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">

                            </div>
                            @error('password')
                            <span style="color: red;" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">{{ __('Login') }}</button>

                            </div>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('?Forgot Your Password') }}
                                </a>
                                @endif

                            </div>
                            <div class="text-center">
                                <a href="{{route('register')}}">Register </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff="#sidebar"></div>


@endsection