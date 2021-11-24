@extends('layouts.admin')

@section('title')
<title>{{ "Participants of ".$event->title  }}</title>
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
            <h6 class="page-title">{{ $event->title }}</h6>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <a class="btn btn-primary waves-effect waves-light" href="{{ route('admin.events.index') }}"><i class="mdi mdi-keyboard-backspace me-2"></i>Go Back Event List</a>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Event Participants</h4>
                <p class="card-title-desc">Total Participants: {{ count($event->users) }}<br>
                    @if ($event->fee != 0)
                    Total Payment: RM {{ $event->users->sum('pivot.payment_amount') }}
                    @endif
                </p>


                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>IC Number</th>
                            <th>Matric Number</th>
                            @if($event->fee != 0)<th>Payment Amount</th>@endif
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($event->users as $event)
                            <tr>
                                <td>{{ $event->pivot->full_name }}</td>
                                <td>{{ $event->pivot->email }}</td>
                                <td>{{ $event->pivot->phone_number }}</td>
                                <td>{{ $event->pivot->ic_number }}</td>
                                <td>{{ $event->pivot->matric_number }}</td>
                                @if($event->pivot->payment_amount != 0)<td>RM {{ $event->pivot->payment_amount }}</td>@endif
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

<!-- Buttons examples -->
<script src="{{ asset('admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/jszip/jszip.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/pdfmake/build/pdfmake.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/pdfmake/build/vfs_fonts.js') }}" defer></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.html5.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.print.min.js') }}" defer></script>
<script src="{{ asset('admin/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}" defer></script>

@endsection