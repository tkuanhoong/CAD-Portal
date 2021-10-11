@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Edit Admin Profile</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">Edit your profile below</li>
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
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
            {{ $error }}     
          </div>
          @endforeach
    @endif
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit {{ auth()->user()->name }}'s Profile</h4>
                <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="img-preview-section">
                        <img id="img_preview"  src="/storage/avatar_images/{{ auth()->user()->avatar }}" alt="admin-picture"
                            class="avatar-lg rounded-circle me-2">
                            <input type="file" id='imgInp' name='avatar' class="@error('name') is-invalid @enderror">
                        <div style="font-size: 13px;"class="small mt-1 mb-3">Allowed JPG, JPEG or PNG. Max size of 800KB</div>
                    </div>
                    <script>
                        imgInp.onchange = evt => {
                        const [file] = imgInp.files
                            if (file) {
                            img_preview.src = URL.createObjectURL(file)
                            }
                        }
                    </script>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10 pt-1">
                        <p>{{ auth()->user()->email}}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ auth()->user()->name }}" required>
                            @error('name')
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