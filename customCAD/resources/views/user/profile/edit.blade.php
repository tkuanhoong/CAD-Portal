@extends('layouts.app')
@section("content")
<section style="height: auto !important;" class="hero-section hero-bg-bg1 bg-gradient1">
<div class="container  light-style flex-grow-1 container-p-y">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  @if ($errors->any())
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
            {{ $error }}
            
          </div>
          @endforeach
  @endif



  <div class="card">
        <div class="card-header py-4">My Profile</div>
    

      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content mb-500">
            <div class="tab-pane fade active show" id="account-general">

              <div class="card-body media align-items-center">
                <form action="{{ route('profile.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      {{ method_field('PUT') }}
                    <img style="vertical-align: middle;width: 100px;height: 100px;border-radius: 50%;object-fit:cover;" id="img_preview" src="/storage/avatar_images/{{ auth()->user()->avatar }} " alt="avatar" class="d-block">
                    <br>
                    <div class="media-body">
                      <label class="btn btn-outline-primary">
                        Upload new photo
                      
                        <input type="file" id='imgInp' name='avatar' class="account-settings-fileinput @error('name') is-invalid @enderror">
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </label>
                      <div class="text-light small mt-1">Allowed JPG, JPEG or PNG. Max size of 800KB</div>
                      
                      <script>
                        imgInp.onchange = evt => {
                        const [file] = imgInp.files
                            if (file) {
                            img_preview.src = URL.createObjectURL(file)
                            }
                        }
                      </script>
                      <!--<button type="reset" class="btn btn-default md-btn-flat">Reset</button>-->
                    </div>
                  </div>
                  <hr class="border-light m-0">

                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">E-mail</label>
                      <p>{{ auth()->user()->email}}</p>
                      
                    </div>
                    <div class="form-group">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ auth()->user()->name }}" required>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <div class="text-right">
                      <button type="submit" class="btn btn-primary my-4">Save changes</button>&nbsp;
                      <button id="resetButton" type="reset" class="btn btn-default my-4 mr-4">Reset</button>
                      
                    </div>

                </form>

              </div>

            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">
                <form action="{{ route('ChangePassword',auth()->user()->id) }}" method='POST'>
                  @csrf
                  {{ method_field('PUT') }}

                  <div class="form-group">
                    <label for='current_password'class="form-label">Current Password</label>
                    <input id='current_password' name='current_password' type="password" class="form-control @error('current_password') is-invalid @enderror">
                    @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for='new_password' class="form-label">New Password</label>
                    <input id='new_password' name ='new_password' type="password" class="form-control @error('new_password') is-invalid @enderror">
                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  

                  <div class="form-group">
                    <label for='new_confirm_password'class="form-label">New Confirm Password</label>
                    <input id='new_confirm_password' name='new_confirm_password' type="password" class="form-control @error('new_confirm_password') is-invalid @enderror">
                    @error('new_confirm_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="text-right">
                    <button type="submit" class="btn btn-primary my-4">Save changes</button>&nbsp;
                    <button type="reset" class="btn btn-default my-4 mr-4">Reset</button>
                  </div>

                </form>

              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>

    </div>
</section>
@endsection