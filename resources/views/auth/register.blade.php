@extends('Layout.app')
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
                                <a href="#" class="btn btn-white btn-outline-white md-round">Sign In</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fab fa-github"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fab fa-google"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">USERNAME</label>
                                    <input type="text" class="md-round form-control" placeholder="Username" required autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">EMAIL</label>
                                    <input type="text" class="md-round form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="number">Phone</label>
                                    <input type="text" class="md-round form-control" placeholder="Phone" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">PASSWORD</label>
                                    <input type="password" class="md-round form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="confirm password">Confirm Password</label>
                                    <input type="password" class="md-round form-control" placeholder="Confirm Password" required>
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
