@extends('layouts.app')
@section('div')

    <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title"  style="font-weight: bold;color: #ff9b44">{{ __('Register') }}</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="{{route('login')}}"><img src="{{asset('admin/assets/img/logo2.png')}}" alt="Focus Technologies"></a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Username') }}</label>
                                <input class="form-control floating @error('name') is-invalid @enderror" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Email') }}</label>
                                <input class="form-control floating @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Password') }}</label>
                                <input id="password" class="form-control floating @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                            </div>
                            <div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group form-focus">
                                <label class="control-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" class="form-control floating" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit"> {{ __('Register') }}</button>
                            </div>
                            <div class="text-center" style="font-weight: bold">
                                <a href="{{route('login')}}">Login </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff="#sidebar"></div>
@endsection