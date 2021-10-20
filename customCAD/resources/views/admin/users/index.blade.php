@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">

<!-- Responsive datatable examples -->
<link href="{{ asset('admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">User Management</h6>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <button type="button" class="btn btn-primary waves-effect waves-light"
                onclick="submitVerifyAllForm()">Verify selected user(s)</button>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

@if (session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div>
@elseif (session()->get('warning'))
    <div class="alert alert-warning">
    {{ session()->get('warning') }}  
    </div>
@elseif (session()->get('error'))
    <div class="alert alert-danger">
    {{ session()->get('error') }}  
    </div>
@endif

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">CADUTMKL Website User List</h4>
                <p class="card-title-desc">Here you can manage your users</p>
                <p class="card-title-desc"><input class="form-check-input select-all" type="checkbox" name="selectAll" id="selectAll"> <label for="selectAll">Select all users on this page</label></p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                    <tr>
                        <th>Select</th>
                        <th>(#) Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Verify</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        
                    @foreach ($users as $user)
                    <tr>
                        <td><input class="form-check-input checkboxes" type="checkbox" name="checkboxes[]" id="checkbox-{{ $user->id }}" value="{{ $user->id }}" form="verifyAllForm"></td>
                        <td>#{{ $user->id }}</td>
                        <td>
                            <div>
                                <img src="/storage/avatar_images/{{ $user->avatar }}" alt="userImage"
                                    class="avatar-xs rounded-circle me-2"> {{ $user->name }}
                            </div>
                        </td>
                        <td>{{ $user->email }}</td>
                        @foreach ($user->roles->pluck('name') as $role)
                        <td>{{ $role }}</td>
                        @endforeach
                        @if ($user->verification === 'verified')
                        <td><span class="badge bg-success">{{ $user->verification }}</span></td>
                        @else
                        <td><span class="badge bg-danger">{{ $user->verification }}</span></td>
                        @endif
                        
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.users.edit',$user) }}">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" style="color:red;" href="{{ route('admin.users.destroy',$user)}}"
                                        onclick="event.preventDefault();
                                        var result = confirm('Are you sure to delete the selected user?');
                                        if(result){
                                            document.getElementById('delete-form-{{ $user->id }}').submit();
                                        }">
                                        Delete
                                    </a>
                                    
                                </div>
                            </div>
                            <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user)}}" method="POST" class="d-none">
                                @csrf
                                {{ method_field('DELETE') }}
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    
                    </tbody>
                    
                </table>
                <form method="POST" id="verifyAllForm" action="{{ route('admin.users.verifyAll') }}">
                    @csrf
                    @method('PUT')
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<!-- Required datatable js -->
<script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}" defer></script>

<!-- Responsive examples -->
<script src="{{ asset('admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"  defer></script>
<script src="{{ asset('admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"  defer></script>

<!-- Datatable init js -->
<script src="{{ asset('admin/js/pages/datatables.init.js') }}" defer></script>
<!-- end row -->
@endsection