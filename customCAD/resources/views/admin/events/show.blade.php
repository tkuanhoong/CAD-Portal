@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">View Event</h6>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Event Details</h4>
                <p class="card-title-desc">You are viewing an event details</p>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Banner</label>
                        <div class="col-sm-10">
                        <img id="img_preview" style="width: 370px;
                        height: 270px;
                        object-fit: contain;" src="/storage/event_images/{{ $event->banner }}" alt="preview_image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="title" name="title" value="{{ $event->title }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="short_description" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="short_description" name="short_description" value="{{ $event->short_description }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="elm1" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                                {!! $event->description !!}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="location" class="col-sm-2 col-form-label">Location</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="location" name="location" value="{{ $event->location }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="organizer" class="col-sm-2 col-form-label">Organizer</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="organizer" name="organizer" value="{{ $event->organizer }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="category" name="category" value="{{ ucfirst($event->category) }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="date" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" id="date" name="date" value="{{ $event->date }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="time" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="time" id="time" name="time" value="{{ $event->time }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fee" class="col-sm-2 col-form-label" for="fee">Program Fee (RM)</label>
                        <div class="col-sm-10">
                            <input id="fee" name="fee" value="{{ $event->fee }}" class="form-control input-mask text-start" 
                            data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'digits': 2, 'digitsOptional': false, 'placeholder': '0', 'clearMaskOnLostFocus': 'false'"
                            im-insert="true" style="text-align: right;" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="attendance_link" class="col-sm-2 col-form-label">Attendance Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="attendance_link" name="attendance_link" value="{{ $event->attendance_link }}" disabled>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="whatsapp_link" class="col-sm-2 col-form-label">WhatsApp Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="whatsapp_link" name="whatsapp_link" value="{{ $event->whatsapp_link }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="meeting_link" class="col-sm-2 col-form-label">Meeting Link</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="meeting_link" name="meeting_link" value="{{ $event->meeting_link }}" disabled>
                        </div>
                    </div>
                    <a href="{{ route('admin.events.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <a href="{{ route('admin.events.edit',$event) }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end me-2">Edit</button></a>
                    
                    

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