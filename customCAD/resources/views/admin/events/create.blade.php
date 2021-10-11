@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Create Event</h6>
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

                <h4 class="card-title">Create Event</h4>
                <p class="card-title-desc">You are creating an event </p>
                <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="imgInp" class="col-sm-2 col-form-label">Preview Banner</label>
                        <div class="col-sm-10">
                        <img id="img_preview" style="width: 370px;
                        height: 270px;
                        object-fit: contain;" src="/storage/event_images/NoImage.png" alt="preview_image">
                        <span class="text-muted">If the event has no image this is the default image</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="imgInp" class="col-sm-2 col-form-label">Upload Banner</label>
                        <div class="col-sm-10">
                        <input id="imgInp" class="form-control @error('banner') is-invalid @enderror" type="file" name="banner">
                        <span class="text-muted">Allowed PNG, JPG, JPEG files not more than 800MB</span>
                        @error('banner')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="short_description" class="col-sm-2 col-form-label">Short Description</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('short_description') is-invalid @enderror" type="text" id="short_description" name="short_description" value="{{ old('short_description') }}">
                            @error('short_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('description') is-invalid @enderror" id="elm1" name="description">
                            {{ old('description') }}
                            </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('location') is-invalid @enderror" type="text" id="location" name="location" value="{{ old('location') }}">
                            @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="organizer" class="col-sm-2 col-form-label">Organizer</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('organizer') is-invalid @enderror" type="text" id="organizer" name="organizer" value="{{ old('organizer') }}">
                            @error('organizer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="category" name="category" aria-label="Default select example">
                                <option @if (old('category') == "competition") selected @endif value="competition">Competition</option>
                                <option @if (old('category') == "free") selected @endif value="free">Free</option>
                                <option @if (old('category') == "recommended") selected @endif value="recommended">Recommended</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('date') is-invalid @enderror" type="date" id="date" name="date" value="{{ old('date') }}">
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="time" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('time') is-invalid @enderror" type="time" id="time" name="time" value="{{ old('time') }}">
                            @error('time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fee" class="col-sm-2 col-form-label">Program Fee (RM)</label>
                        <div class="col-sm-10">
                            <input id="fee" name="fee" value="{{ old('fee') }}" class="form-control input-mask text-start @error('fee') is-invalid @enderror" 
                            data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0', 'clearMaskOnLostFocus': 'false'"
                            im-insert="true" style="text-align: right;">
                            @error('fee')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="attendance_link" class="col-sm-2 col-form-label">Attendance Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('attendance_link') is-invalid @enderror" type="text" id="attendance_link" name="attendance_link" value="{{ old('attendance_link') }}">
                            @error('attendance_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="whatsapp_link" class="col-sm-2 col-form-label">WhatsApp Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('whatsapp_link') is-invalid @enderror" type="text" id="whatsapp_link" name="whatsapp_link" value="{{ old('whatsapp_link') }}">
                            @error('whatsapp_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="meeting_link" class="col-sm-2 col-form-label">Meeting Link</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('meeting_link') is-invalid @enderror" type="text" id="meeting_link" name="meeting_link" value="{{ old('meeting_link') }}">
                            @error('meeting_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    
                    <a href="{{ route('admin.events.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light float-end me-3">Create</button>
                    
                    
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!--tinymce js-->
<script src="{{ asset('admin/libs/tinymce/tinymce.min.js') }}" defer></script>

<!-- init js -->
<script src="{{ asset('admin/js/pages/form-editor.init.js') }}" defer></script>
<!-- form mask -->
<script src="{{ asset('admin/libs/inputmask/min/jquery.inputmask.bundle.min.js') }}" defer></script>

<!-- form mask init -->
<script src="{{ asset('admin/js/pages/form-mask.init.js') }}" defer></script>
<script>
    imgInp.onchange = evt => {
    const [file] = imgInp.files
        if (file) {
        img_preview.src = URL.createObjectURL(file)
        }
    }

</script>

@endsection