@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Contact Message from {{ $contact->name }}</h6>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <a class="btn btn-primary waves-effect waves-light" href="{{ route('admin.contacts.index') }}"><i class="mdi mdi-keyboard-backspace me-2"></i>Go Back Contact List</a>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Personal Details</h4>
                        <label class="form-title">Name</label>
                        <p class="card-title-desc">{{ $contact->name }}</p>
                        <label class="form-title">Email</label>
                        <p class="card-title-desc">{{ $contact->email }}</p>
                        <label class="form-title">Phone Number</label>
                        <p class="card-title-desc">{{ $contact->phone_number }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Requirements</h4>
                        <label class="form-title">Subject</label>
                        <p class="card-title-desc">{{ $contact->subject }}</p>
                        <label class="form-title">Message</label>
                        <p class="card-title-desc">{{ $contact->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection