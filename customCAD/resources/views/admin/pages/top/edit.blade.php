@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Edit Top Member</h6>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit Top Member</h4>
                <p class="card-title-desc">You are editing a top member details </p>
                <form action="{{ route('admin.Tops.update',$Top) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row mb-3">
                        <label for="imgInp" class="col-sm-2 col-form-label">Preview Image</label>
                        <div class="col-sm-10">
                        <img id="img_preview" style="width: 370px;
                        height: 270px;
                        object-fit: contain;" src="{{ Storage::disk('s3')->url('org_images/'.$Top->id.'/'.$Top->image) }}" alt="preview_image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="imgInp" class="col-sm-2 col-form-label">Upload Image</label>
                        <div class="col-sm-10">
                        <input id="imgInp" class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        <span class="text-muted">Allowed PNG, JPG, JPEG files not more than 800MB</span>
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{ $Top->name }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('position') is-invalid @enderror" type="text" id="position" name="position" value="{{ $Top->position }}">
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('priority') is-invalid @enderror" type="text" id="priority" name="priority" value="{{ $Top->priority }}">
                            @error('priority')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <a href="{{ route('admin.Tops.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light float-end me-3">Update</button>
                    
                    
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
        img_preview.src = URL.createObjectURL(file)
        }
    }

</script>

@endsection