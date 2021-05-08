@extends('layouts.app')
@section('title', "Forget Password")

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
                            <h1><span>Forgot</span> Password</h1>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Form start -->
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email" class="input-text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                           I want to <a href="{{ route('login') }}">return to login</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
@endsection
