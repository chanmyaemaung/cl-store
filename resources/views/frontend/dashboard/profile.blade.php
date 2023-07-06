@extends('frontend.dashboard.layouts.master')

@section('main-content')
    <section id="wsus__dashboard">
        <div class="container-fluid">
            <!-- begin::Sidebar -->
            @include('frontend.dashboard.layouts.sidebar')
            <!-- end::Sidebar -->

            <div class="row">
                <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
                    <div class="dashboard_content mt-2 mt-md-0">
                        <h3><i class="far fa-user"></i> profile</h3>
                        <div class="wsus__dashboard_profile">
                            <div class="wsus__dash_pro_area">
                                <h4>basic information</h4>

                                <!-- begin::Update Profile -->
                                <form action="{{ route('user.profile.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @method('PUT')

                                    <div class="row mb-3">
                                        <div class="col-12 col-xl-3 col-sm-6 col-md-6">
                                            <div class="wsus__dash_pro_img">
                                                @php
                                                    $image = Auth::user()->image ? asset(Auth::user()->image) : asset('frontend/images/ts-2.jpg');
                                                @endphp
                                                <img src="{{ $image }}" alt="img" class="img-fluid w-100">
                                                <input type="file" name="image" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fas fa-user-tie"></i>
                                                        <input type="text" name="name"
                                                            value="{{ Auth::user()->name }}" placeholder="Name" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fas fa-user-tie"></i>
                                                        <input type="text" name="username"
                                                            value="{{ Auth::user()->username }}" readonly
                                                            placeholder="Username" style="cursor: not-allowed;" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="far fa-phone-alt"></i>
                                                        <input type="text" name="phone"
                                                            value="{{ Auth::user()->phone }}" placeholder="Phone" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fal fa-envelope-open"></i>
                                                        <input type="email" name="email"
                                                            value="{{ Auth::user()->email }}" placeholder="Email" />
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="common_btn mb-4 mt-2" type="submit">
                                                        Update Information
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end::Update Profile -->

                                <!-- begin::Update Password -->
                                <div class="row mt-3">
                                    <h4>Update Password</h4>
                                    <form action="{{ route('user.profile.update.password') }}" method="POST">
                                        @csrf

                                        <div class="wsus__dash_pass_change">
                                            <div class="row">
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fas fa-unlock-alt"></i>
                                                        <input type="password" name="current_password"
                                                            placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-6">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fas fa-lock-alt"></i>
                                                        <input type="password" name="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="wsus__dash_pro_single">
                                                        <i class="fas fa-lock-alt"></i>
                                                        <input type="password" name="password_confirmation"
                                                            placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="common_btn" type="submit">Update Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end::Update Password -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
