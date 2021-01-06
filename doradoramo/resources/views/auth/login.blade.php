@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/indexProjectStyle.css') }}" type="text/css"> 

    <div class="hero">

        <div class="form-border">

            <div class="label-box">

                <label href="{{ route('login') }}">{{ _('Log In') }}</label>

            </div>

            <div class="input-form">

                    <form id="login" class="input-group"  method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div>
                            <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div>
                            <input type="checkbox" class="check-box" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span for="remember">{{ _('Remember Me') }}</span>
                        </div>
                        
                        <button type="submit" class="submit-btn">{{ _('Login') }}</button>
                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </form>

            </div>
            
        </div>

    </div>
