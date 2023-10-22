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
                <h1>Manage User</h1>
                
            </div>

            <div class="section-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                       <div class="card">
                        <div class="card-header">

                            <div class="card-header-action">
                                <a href="{{ route("users.create") }}"
                                    class="btn btn-primary">Create New User</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($users as $user)    
                                       <tr>
                                            <td>
                                                {{ $user->id }}
                                            </td>
                                           <td>
                                               {{ $user->email }}
                                           </td>
                                           <td>
                                                {{ $user->name }}
                                           </td>
                                           <td>
                                                 {{ $user->role->name }}
                                           </td>
                                           <td>
                                                 {{ $user->password }}
                                           </td>
                                           <td class="row">
                                                    <div>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-action mr-1"
                                                            data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </div>

                                             
                                                
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-action"
                                                        data-toggle="tooltip"
                                                        title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.');"
                                                    ><i class="fas fa-trash"></i></button>
                                                </form>
                                               
                                           </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                </table>
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
