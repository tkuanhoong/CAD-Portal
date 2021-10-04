@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h6 class="page-title">Editing User</h6>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit {{ $user->name }} (#{{ $user->id }})</h4>
                <p class="card-title-desc">You are modifying {{ $user->name }}'s account </p>
                <form action="{{ route('admin.users.update',$user) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>

                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label">User role</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="roles" aria-label="Default select example">
                                @foreach ($roles as $role)
                                <option @if($user->roles->pluck('id')->contains($role->id)) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Reset Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="password" placeholder="This field is only for changing user's password (left blank if you dont wanna change it)">
                        </div>
                    </div>

                    <div class=" row mb-3">
                        <label class="col-sm-2 col-form-label">Verification status</label>
                        <div class="col-sm-10">
                            <input style="margin-top:10px;"class="form-check-input" type="checkbox" name="verification" value="verified" @if($user->verification === 'verified') checked @endif>
                        </div>
                    </div>

                    
                    <a href="{{ route('admin.users.index') }}"><button type="button" class="btn btn-primary waves-effect waves-light float-end">Back</button></a>
                    <button type="submit" class="btn btn-primary waves-effect waves-light float-end me-3">Update</button>
                    
                    
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection