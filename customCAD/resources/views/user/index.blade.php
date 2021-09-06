@extends('layouts.app')

@section('content')
<section class="hero-section hero-bg-bg1 bg-gradient1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as User!') }}
                    

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection