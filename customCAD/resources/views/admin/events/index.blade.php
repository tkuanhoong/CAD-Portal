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
            <h6 class="page-title">Event Management</h6>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <a class="btn btn-primary waves-effect waves-light" href="{{ route('admin.events.create') }}"><i class="mdi mdi-plus-circle-outline me-2"></i>Create Event</a>
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

                <h4 class="card-title">CADUTMKL Website Event List</h4>
                <p class="card-title-desc">Here you can manage your events</p>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                    <thead>
                    <tr>
                        <th>(#) Id</th>
                        <th>Banner & Title</th>
                        <th>Location</th>
                        <th>Organizer</th>
                        <th>Category</th>
                        <th>Event Fee (RM)</th>
                        <th>Event Organized At</th>
                        <th>Links</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>#{{ $event->id }}</td>
                        <td>
                            <div>
                                <img src="/storage/event_images/{{ $event->banner }}" alt="eventBanner"
                                    class="avatar-xs rounded-circle me-2"> {{ $event->title }}
                            </div>
                        </td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->organizer }}</td>
                        <td>{{ ucfirst($event->category) }}</td>
                        <td>{{ $event->fee }}</td>
                        <td><p>Date: {{  date('d-m-Y', strtotime($event->date)) }}</p>
                            <p>Time: {{ date('h:i A', strtotime($event->time)) }}</p></td>
                        <td>
                            <ul>
                                <li>Attendance Link - {{ $event->attendance_link }}</li>
                                <li>Whatsapp Group Link - {{ $event->whatsapp_link }}</li>
                                <li>Meeting Link - {{ $event->meeting_link }}</li>
                            </ul>
                        </td>
                        
                        <td>
                            <div class="btn-group float-end">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i></button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('admin.events.show',$event) }}">View</a>
                                    <a class="dropdown-item" href="{{ route('admin.events.edit',$event) }}">Edit</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" style="color:red;" href="{{ route('admin.events.destroy',$event)}}"
                                        onclick="event.preventDefault();
                                        var result = confirm('Are you sure to delete the selected event?');
                                        if(result){
                                            document.getElementById('delete-form-{{ $event->id }}').submit();
                                        }">
                                        Delete
                                    </a>
                                    
                                </div>
                            </div>
                            <form id="delete-form-{{ $event->id }}" action="{{ route('admin.events.destroy', $event)}}" method="POST" class="d-none">
                                @csrf
                                {{ method_field('DELETE') }}
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                    
                    </tbody>
                    
                </table>

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