@extends('layouts.app')

@section('content')
<section class="hero-section hero-bg-bg1 bg-gradient1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>

                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                        
                          <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->value('name') }}</td>
                            <td>
                              @can('edit-users')
                              <a href="{{ route('admin.users.edit',$user->id) }}"><button type="button" class="btn btn-primary float-left">Edit</button></a>  
                              @endcan
                              @can('delete-users')
                            <form action="{{ route('admin.users.destroy',$user)}}" method="POST"}} class="float-left ml-2">
                              @csrf
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger">Delete</button>
                            
                            </form>
                            @endcan
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection