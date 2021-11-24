@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Edit Home Page</h6>
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

                <h4 class="card-title">Editing Home Page Content</h4>
                <p class="card-title-desc">You are editing home page content </p>
                <form action="{{ route('admin.home.update', $home) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}

                    <div class="row mb-3">
                        <label for="upcoming_programs" class="col-sm-2 col-form-label">Upcoming Programs</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('upcoming_programs') is-invalid @enderror" type="text" id="upcoming_programs" name="upcoming_programs" value="{{ $home->upcoming_programs }}">
                            @error('upcoming_programs')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="programs_completed" class="col-sm-2 col-form-label">Programs Completed</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('programs_completed') is-invalid @enderror" type="text" id="programs_completed" name="programs_completed" value="{{ $home->programs_completed }}">
                            @error('programs_completed')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="members" class="col-sm-2 col-form-label">Members</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('members') is-invalid @enderror" type="text" id="members" name="members" value="{{ $home->members }}">
                            @error('members')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="years" class="col-sm-2 col-form-label">Years</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('years') is-invalid @enderror" type="text" id="years" name="years" value="{{ $home->years }}">
                            @error('years')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="facebook_link" class="col-sm-2 col-form-label">Facebook Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('facebook_link') is-invalid @enderror" type="text" id="facebook_link" name="facebook_link" value="{{ $home->facebook_link }}">
                            @error('facebook_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="instagram_link" class="col-sm-2 col-form-label">Instagram Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('instagram_link') is-invalid @enderror" type="text" id="instagram_link" name="instagram_link" value="{{ $home->instagram_link }}">
                            @error('instagram_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="telegram_link" class="col-sm-2 col-form-label">Telegram Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('telegram_link') is-invalid @enderror" type="text" id="telegram_link" name="telegram_link" value="{{ $home->telegram_link }}">
                            @error('telegram_link')
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