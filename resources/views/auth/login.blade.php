@extends('layouts.app')
@section('title', "Login")

@section('content')
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1><span>{{ __('Login') }}</span></h1>
                        </div>
                        @error('email')
                            <div class="alert alert-danger wow fadeInRight delay-03s" role="alert" style="visibility: visible; animation-name: fadeInRight;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {{ $message }}
                            </div>
                        @enderror

                        @error('password')
                            <div class="alert alert-danger wow fadeInRight delay-03s" role="alert" style="visibility: visible; animation-name: fadeInRight;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {{ $message }}
                            </div>
                        @enderror

                        <!-- Form start -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="input-text @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input class="ez-hide" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="link-not-important pull-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">{{ __('Login') }}</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
@endsection
