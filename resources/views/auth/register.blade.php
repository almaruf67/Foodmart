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
                                <p>Already have an account?</p>
                                <a href="{{ route('login') }}" class="btn btn-white btn-outline-white md-round">Sign In</a>
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
                            <form method="POST" action="{{ route('register') }}" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="name">USERNAME</label>
                                    {{-- <input type="text" class="md-round form-control" placeholder="Username" required autofocus> --}}
                                    <input id="inputName" type="text" placeholder="Enter Name"
                                    class="md-round form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">EMAIL</label>
                                    {{-- <input type="text" class="md-round form-control" placeholder="Email" required> --}}
                                    <input id="email" type="email" placeholder="Email"
                                    class="md-round form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="number">Phone</label>
                                    <input type="text" id="phone" name="phone" class="md-round form-control" placeholder="Enter your number" required value="{{ old('phone') }}" autocomplete="phone">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">PASSWORD</label>
                                   
                                    <input id="password" type="password" placeholder="Password"
                                    class="md-round form-control @error('password') is-invalid @enderror"
                                    name="password" required >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="confirm password">Confirm Password</label>
                                   
                                    <input id="password-confirm" type="password" class="md-round form-control" name="password_confirmation"placeholder="Confirm Password" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="password-confirmation-status"></label>
                                    <span id="password-confirmation-status"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary md-round submit yumzy-or px-3">Sign
                                        Up</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
<script>
document.getElementById('password-confirm').addEventListener('input', function () {
    const passwordInput = document.getElementById('password').value;
    const confirmationInput = this.value;
    const confirmationStatus = document.getElementById('password-confirmation-status');

    if (passwordInput === confirmationInput) {
        confirmationStatus.textContent = '✓ Passwords match';
        confirmationStatus.style.color = 'green';
    } else {
        confirmationStatus.textContent = '✗ Passwords do not match';
        confirmationStatus.style.color = 'red';
    }
});
</script>
@endsection
