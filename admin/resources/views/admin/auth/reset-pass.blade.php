@extends('admin.layouts.auth')

@section('title')
Reset Password
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
                <p class="mb-6">Reset Password</p>
            </div>
            <!-- Form -->
            <form action="{{ route('admin.store.reset.password', $token) }}" method="POST">

                @csrf

                <input type="hidden" name="email" value="{{ $admin->email }}">



                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="**************" required="" />
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" class="form-control" name="password"
                        placeholder="**************" required="" />
                </div>


                <div>
                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Reset Password
                        </button>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>


@endsection