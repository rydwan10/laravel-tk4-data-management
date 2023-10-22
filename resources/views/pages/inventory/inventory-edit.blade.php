@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Inventory</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6">
                       <div class="card">
                        <div class="card-header">

                            <div class="card-header-action">
                                <a href="{{ route('inventories.index') }}"
                                    class="btn btn-primary">Inventory List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-body">
                                <form method="POST" action="{{ route('inventories.update', $inventory->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-12">
                                        <label for="name">Name</label>
                                        <input name="name" type="text"
                                            class="form-control" required value="{{ $inventory->name }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="price">Price</label>
                                        <input name="price" type="number"
                                            class="form-control" value="{{ $inventory->price }}">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="storage_cost">Storage Cost</label>
                                        <input name="storage_cost" type="number"
                                            class="form-control" value="{{ $inventory->storage_cost }}">
                                        @error('storage_cost')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="request_period">Request Period</label>
                                        <input name="request_period" type="number"
                                            class="form-control" value="{{ $inventory->request_period }}">
                                        @error('request_period')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="unit">Unit</label>
                                        <input name="unit" type="string"
                                            class="form-control" value="{{ $inventory->unit }}">
                                        @error('unit')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="convertion">Convertion</label>
                                        <input name="convertion" type="number"
                                            class="form-control" value="{{ $inventory->convertion }}">
                                        @error('convertion')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
