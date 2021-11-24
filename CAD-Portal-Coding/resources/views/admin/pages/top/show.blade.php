@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">View Top Member</h6>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Top Member Details</h4>
                <p class="card-title-desc">You are viewing a top member details</p>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Top Member Picture</label>
                        <div class="col-sm-10">
                        <img id="img_preview" style="width: 370px;
                        height: 270px;
                        object-fit: contain;" src="{{ Storage::disk('s3')->url('org_images/'.$Top->id.'/'.$Top->image) }}" alt="preview_image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="name" name="name" value="{{ $Top->name }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="position" class="col-sm-2 col-form-label">Position</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="position" name="position" value="{{ $Top->position }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="priority" name="priority" value="{{ $Top->priority }}" disabled>
                        </div>
                    </div>

                    <a href="{{ route('admin.Tops.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <a href="{{ route('admin.Tops.edit',$Top) }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end me-2">Edit</button></a>
                    
                    

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