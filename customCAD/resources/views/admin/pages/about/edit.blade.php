@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Edit About Page</h6>
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

                <h4 class="card-title">Editing About Page Content</h4>
                <p class="card-title-desc">You are editing about page content </p>
                <form action="{{ route('admin.AboutPage.update', $AboutPage) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}

                    <h4 class="card-title mb-4">Missions</h4>
                    <div class="row mb-3">
                        <label for="mission1" class="col-sm-2 col-form-label">Mission 1</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('mission1') is-invalid @enderror" type="text" id="mission1" name="mission1" value="{{ $AboutPage->mission1 }}">
                            @error('mission1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mission2" class="col-sm-2 col-form-label">Mission 2</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('mission2') is-invalid @enderror" type="text" id="mission2" name="mission2" value="{{ $AboutPage->mission2 }}">
                            @error('mission2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mission3" class="col-sm-2 col-form-label">Mission 3</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('mission3') is-invalid @enderror" type="text" id="mission3" name="mission3" value="{{ $AboutPage->mission3 }}">
                            @error('mission3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mission4" class="col-sm-2 col-form-label">Mission 4</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('mission4') is-invalid @enderror" type="text" id="mission4" name="mission4" value="{{ $AboutPage->mission4 }}">
                            @error('mission4')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="card-title mb-4">Visions</h4>
                    <div class="row mb-3">
                        <label for="vision1" class="col-sm-2 col-form-label">Vision 1</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('vision1') is-invalid @enderror" type="text" id="vision1" name="vision1" value="{{ $AboutPage->vision1 }}">
                            @error('vision1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vision2" class="col-sm-2 col-form-label">Vision 2</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('vision2') is-invalid @enderror" type="text" id="vision2" name="vision2" value="{{ $AboutPage->vision2 }}">
                            @error('vision2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vision3" class="col-sm-2 col-form-label">Vision 3</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('vision3') is-invalid @enderror" type="text" id="vision3" name="vision3" value="{{ $AboutPage->vision3 }}">
                            @error('vision3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="vision4" class="col-sm-2 col-form-label">Vision 4</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('vision4') is-invalid @enderror" type="text" id="vision4" name="vision4" value="{{ $AboutPage->vision4 }}">
                            @error('vision4')
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