@extends('layouts.app')

@section('content')
<section class="hero-section hero-bg-bg1 bg-gradient1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User {{ $user->name }}</div>

                <div class="card-body">
                    <form action="{{ route('admin.users.update', $user) }}" method="POST">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input type="radio" name="roles" id="role {{ $role->id }}"value="{{ $role->id }}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label for="role {{ $role->id }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roles" class="col-md-2 col-form-label text-md-right">Verification status</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="radio" name="verification" id="verification" value="verified"
                                    @if($user->verification === 'verified') checked @endif>
                                    <label for="verification">Verified</label>
                                    <br>
                                    <input type="radio" name="verification" id="no-verification" value="unverified"
                                    @if($user->verification === 'unverified') checked @endif>
                                    <label for="no-verification">Unverified</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.users.index') }}"><button type="button" class="btn btn-primary float-right">Back</button></a>
                    </form>
                    

                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection