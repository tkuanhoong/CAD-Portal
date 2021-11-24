@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Edit Organization Page</h6>
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

                <h4 class="card-title">Editing Organization Page Content</h4>
                <p class="card-title-desc">You are editing organization page content </p>
                <form action="{{ route('admin.Organization.update', $Organization) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="row mb-3">
                        <label for="organization_name" class="col-sm-2 col-form-label">Organization Name</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('organization_name') is-invalid @enderror" type="text" id="organization_name" name="organization_name" value="{{ $Organization->name }}">
                            @error('organization_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    
                    <a href="{{ route('admin.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light float-end me-3">Update</button>
                    
                    
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection