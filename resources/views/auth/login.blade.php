@extends('auth/Layout.app')
@section('content')
    <section class="ftco-section mt-25 mb-25">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex mt-10">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to Foodmart</h2>
                                <p>Don't have an account?</p>
                                <a href="{{ route('register') }}" class="btn btn-white btn-outline-white md-round">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="/auth/github/redirect"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fab fa-github"></span></a>
                                        <a href="/auth/google/redirect"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fab fa-google"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="{{ route('login') }}" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">EMAIL</label>
                                    <input id="email" class="md-round form-control @error('email') is-invalid @enderror"
                                        type="email" placeholder="Enter your email" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">PASSWORD</label>
                                    <input type="password" class="md-round form-control" type="password" id="password"
                                        placeholder="Enter your Password" @error('password') is-invalid @enderror
                                        name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="form-group d-md-flex pt-2">
                                        <div class="w-100 text-left">

                                            <label class="checkbox-wrap checkbox-primary mb-0"
                                                for="remember">{{ __('Remember Me') }}<input type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}><span class="checkmark"></span></label>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary md-round submit yumzy-or px-3">Sign
                                        In</button>
                                </div>
                                <div class="form-group">
                                    @if (Route::has('password.request'))
                                            <div class="w-100 text-md-right pr-2 pt-1">
                                                <a href="{{ route('password.request') }}">Forgot Password</a>
                                            </div>
                                        @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
