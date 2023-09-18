@extends('Layout.app')
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
                                    <h3 class="mb-4">Set New Password</h3>
                                </div>
                                <div class="w-10">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fas fa-key"></span></a>

                                    </p>
                                </div>
                            </div>

                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="password">NEW PASSWORD</label>
                                    <input type="password" class="md-round form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="confirm password">Confirm Password</label>
                                    <input type="password" class="md-round form-control" placeholder="Confirm Password" required>
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
