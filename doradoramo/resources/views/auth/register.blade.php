@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/indexProjectStyle.css') }}" type="text/css"> 

<div class="hero">

    <div class="form-border">
        
        <div class="label-box">

            <label action="{{ route('register') }}">{{ _('Register') }}</label>

        </div>

        <div class="input-form">

            <form id="register" class="input-group" method="POST" action="{{ route('register') }}">
                @csrf
                
                <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="E-mail" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="name" type="text" class="input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input id="password-confirm" type="password" class="input-field" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                <button type="submit" class="submit-btn">{{ _('Register') }}</button>

            </form>
        </div>
    </div>

</div>