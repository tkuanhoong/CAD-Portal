@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Change Admin Password</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">Change your password below</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    @if (session()->get('success'))
    <div class="alert alert-success">
    {{ session()->get('success') }}  
    </div>
    @endif
    @if ($errors->any())
          <div class="alert alert-danger">
            There was problem changing your password.  
          </div>
    @endif
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Change {{ auth()->user()->name }}'s Password</h4>
                <form action="{{ route('ChangePassword',auth()->user()->id) }}" method='POST'>
                    @csrf
                    {{ method_field('PUT') }}
                    
                    <div class="row mb-3">
                        <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('current_password') is-invalid @enderror" type="password" id="current_password" name="current_password" value="{{ old('current_password') }}">
                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('new_password') is-invalid @enderror" type="password" id="new_password" name="new_password">
                            @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="new_confirm_password" class="col-sm-2 col-form-label">New Confirm Password</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('new_confirm_password') is-invalid @enderror" type="password" id="new_confirm_password" name="new_confirm_password">
                            @error('new_confirm_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="float-end me-4">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    
</div>
<!-- end row -->
@endsection