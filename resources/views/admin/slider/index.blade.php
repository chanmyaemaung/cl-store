@extends('admin.layout.master')

@section('main-content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Slider</div>
            </div>
        </div>

        <div class="section-body">

            <!-- begin::Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Slider</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Create New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
            <!-- end::Table -->
        </div>
    </section>
@endsection
