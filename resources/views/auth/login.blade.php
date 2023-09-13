@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row g-3">
                          <div class="col-12">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>

                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>

                              <input id="email" type="email" placeholder="Email" class="form-control radius-30 ps-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                          </div>
                          <div class="col-12">

                            <label for="password" class="form-label">{{ __('Password') }}</label>


                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>

                              <input type="password" class="form-control radius-30 ps-5" type="password" id="password" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="current-password">

                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                              <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                            </div>
                          </div>
                          <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">{{ __('Login') }}</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class=" text-center"> <span>OR SIGN IN WITH EMAIL</span>
                              <hr>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center gap-3 justify-content-center">
                              <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                              <button type="button" class="btn btn-white text-primary"><i class="bi bi-linkedin me-0"></i></button>
                              <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                            </div>
                          </div>
                          <div class="col-12 text-center">
                            <p class="mb-0">Don't have an account yet? <a href="authentication-signup-with-header-footer.html">Sign up here</a></p>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
