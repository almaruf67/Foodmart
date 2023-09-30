@extends('auth/Layout.app')
@section('content')
    <section class="ftco-section mt-25 mb-25">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex mt-10">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">

                                <h4>Don't have an account?</h4>
                                <a href="{{ route('register') }}" class="btn btn-white btn-outline-white md-round">Sign Up</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-90">
                                    <h3 class="mb-4">Reset Password</h3>
                                    <p>Enter the email address associated with your account and we'll send you a link to
                                        reset your password.</p>
                                </div>
                                <div class="w-10">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fas fa-unlock"></span></a>

                                    </p>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">EMAIL</label>

                                    <input id="email" type="email"
                                        class="md-round form-control @error('email') is-invalid @enderror" name="email"
                                        placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary md-round submit yumzy-or px-3">Continue</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
