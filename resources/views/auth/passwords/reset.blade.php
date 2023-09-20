@extends('auth/Layout.app')
@section('content')
    <section class="ftco-section mt-25 mb-25">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex mt-10">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">

                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-90">
                                    <h3 class="mb-4">Reset Password</h3>
                                </div>
                                <div class="w-10">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fas fa-key"></span></a>

                                    </p>
                                </div>
                            </div>

                            <form method="POST" action="{{ route('password.update') }}" class="signin-form">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group mb-3">
                                    <label class="label" for="email">EMAIL</label>
                                    <input id="email" type="email" placeholder="Email"
                                    class="md-round form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                    <label for="password-confirmation-status">Password Confirmation</label>
                                    <span id="password-confirmation-status"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="form-control btn btn-primary md-round submit yumzy-or px-3">SAVE CHANGES</button>
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
