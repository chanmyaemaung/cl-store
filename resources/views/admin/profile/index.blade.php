@extends('admin.layout.master')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <!-- begin::First Card -->
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{ route('admin.profile.update') }}" method="post" class="needs-validation"
                            novalidate="" enctype="multipart/form-data">
                            @csrf

                            <div class="card-header">
                                <h4>Update Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class=mb-3>
                                            <img src="{{ asset(Auth::user()->image) }}" alt="Profile Image"
                                                width="100px" />
                                        </div>
                                        <label for="image">Image</label>
                                        <input type="file" id="image" name="image" class="form-control" />
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control" required />
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email"
                                            value="{{ Auth::user()->email }}" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end::First Card -->

                <!-- begin::Second Card -->
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <span class="alert alert-danger">{{ $error }}</span>
                            @endforeach
                        @endif

                        <form action="{{ route('admin.password.update') }}" method="post" class="needs-validation">
                            @csrf

                            <div class="card-header">
                                <h4>Update Password</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <div class="form-group col-12">
                                            <label for="current_password">Current Password</label>
                                            <input type="password" id="current_password" name="current_password"
                                                class="form-control" required />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="password">New Password</label>
                                            <input type="password" id="password" name="password" class="form-control"
                                                required />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation"
                                                class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                        </form>
                    </div>
                </div>
                <!-- end::Second Card -->
            </div>
        </div>
    </section>
@endsection
