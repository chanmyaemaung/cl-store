@extends('frontend.layout.master')

@section('main-content')
    <!-- begin::Breadcrumb -->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Reset password</h4>
                        <ul>
                            <li><a href="{{ route('login') }}">login</a></li>
                            <li><a href="#">Reset password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end::Breadcrumb -->


    <!-- begin::Reset Password Page -->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-7 m-auto">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="wsus__change_password">
                            <h4>Reset password</h4>
                            <div class="wsus__single_pass">
                                <label>{{ __('Email') }}</label>
                                <input type="email" name="email" value="{{ old('email', $request->email) }}"
                                    placeholder="Email">
                            </div>
                            <div class="wsus__single_pass">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" name="password" placeholder="New Password">
                            </div>
                            <div class="wsus__single_pass">
                                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <button class="common_btn" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end::Reset Password Page -->
@endsection
