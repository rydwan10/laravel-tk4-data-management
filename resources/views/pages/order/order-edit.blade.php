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
                <h1>Edit Order</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-6">
                       <div class="card">
                        <div class="card-header">

                            <div class="card-header-action">
                                <a href="{{ route('orders.index') }}"
                                    class="btn btn-primary">Order List</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="card-body">
                                <form method="POST" action="{{ route('orders.update', $order->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group col-12">
                                        <label for="orderer_name">Orderer Name</label>
                                        <input name="orderer_name" type="text"
                                            class="form-control" value="{{ $order->orderer_name }}">
                                        @error('orderer_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="inventory_id">Inventory</label>

                                        <select name="inventory_id" class="form-control col-12">
                                            @foreach($inventories as $inventory)
                                                <option value="{{ $inventory->id }}">{{ $inventory->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('inventory_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="quantity">Quantity</label>
                                        <input name="quantity" type="number"
                                            class="form-control" value="{{ $order->quantity }}">
                                        @error('quantity')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="lead_time">Lead Time</label>
                                        <input name="lead_time" type="number"
                                            class="form-control" value="{{ $order->lead_time }}">
                                        @error('lead_time')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="used">Used</label>
                                        <input name="used" type="string"
                                            class="form-control" value="{{ $order->used }}">
                                        @error('used')
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
