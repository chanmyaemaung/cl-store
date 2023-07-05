@extends('frontend.layout.master')

@section('main-content')
    <!-- begin::Breadcrumb -->
    <section id="wsus__breadcrumb">
        <div class="wsus_breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>forget password</h4>
                        <ul>
                            <li><a href="{{ route('login') }}">login</a></li>
                            <li><a href="#!">forget password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end::Breadcrumb -->


    <!-- begin::Forget Password -->
    <section id="wsus__login_register">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 m-auto">
                    <div class="wsus__forget_area">
                        <span class="qiestion_icon"><i class="fal fa-question-circle"></i></span>
                        <h4>forget password ?</h4>
                        <p>Fill your email and hit send button and check in your email for the futher informatioin.</p>
                        <div class="wsus__login">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="wsus__login_input">
                                    <i class="fal fa-envelope"></i>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        placeholder="Your Email" />
                                </div>
                                <button class="common_btn" type="submit">send</button>
                            </form>
                        </div>
                        <a class="see_btn mt-4" href="{{ route('login') }}">go to login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end::Forget Password -->
@endsection
