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
                            <h4>Create Slider</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    Create New
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="sliderBanner">Banner</label>
                                    <input type="file" name="banner" id="sliderBanner" class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderType">Type</label>
                                    <input type="text" name="type" value="{{ old('type') }}" id="sliderType"
                                        class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderTitle">Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" id="sliderTitle"
                                        class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderStartingPrice">Starting Price</label>
                                    <input type="text" name="price" value="{{ old('price') }}"
                                        id="sliderStartingPrice" class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderButtonUrl">Button URL</label>
                                    <input type="url" name="url" value="{{ old('url') }}" id="sliderButtonUrl"
                                        class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderSerial">Serial</label>
                                    <input type="text" name="serial" value="{{ old('serial') }}" id="sliderSerial"
                                        class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="sliderStatus">Status</label>
                                    <select name="status" id="sliderStatus" class="form-control">
                                        <option selected="">Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end::Table -->
        </div>
    </section>
@endsection
