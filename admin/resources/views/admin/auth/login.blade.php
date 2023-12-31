@extends('admin.layouts.auth')

@section('title')
Login
@endsection

@section('auth')

<div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
    <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
    </a>
    <!-- Card -->
    <div class="card smooth-shadow-md">
        <!-- Card body -->
        <div class="card-body p-6">
            <div class="mb-4">
                <a href="../index.html">
                    <img src="../assets/images/brand/logo/logo-2.svg" class="mb-2 text-inverse" alt="Image" />
                </a>
                <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            <form action="{{ route('admin.store.login') }}" method="POST">

                @csrf


                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Email address here"
                        required="" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="**************" required="" />
                </div>

                <div class="d-lg-flex justify-content-between align-items-center mb-4">
                    <div class="form-check custom-checkbox">
                        <input type="checkbox" class="form-check-input" id="rememberme" />
                        <label class="form-check-label" for="rememberme">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Sign in
                        </button>
                    </div>

                    <div class="d-md-flex justify-content-between mt-4">

                        <div>
                            <a href="{{ route('admin.forget.password') }}" class="text-inherit fs-5">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection