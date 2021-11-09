@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Dashboard</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">Welcome to CADUTMKL Admin Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-start mini-stat-img me-4">
                        <img src="{{ asset('admin/images/services-icon/user.png') }}" alt="totalUserIcon">
                    </div>
                    <h5 class="font-size-16 text-uppercase text-white-50">Total Users</h5>
                    <h4 class="fw-medium font-size-24">{{ $users->count() }}</h4>
                </div>
                <div class="pt-2">
                    <div class="float-end">
                        <a href="{{ route('admin.users.index') }}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <a href="{{ route('admin.users.index') }}"><p class="text-white-50 mb-0 mt-1">Manage Users</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-start mini-stat-img me-4">
                        <img src="{{ asset('admin/images/services-icon/unverified.png') }}" alt="unverifiedUserIcon">
                    </div>
                    <h5 class="font-size-16 text-uppercase text-white-50">Unverified Users</h5>
                    <h4 class="fw-medium font-size-24">{{ $users->where('verification','<>','verified')->count() }}</h4>
                </div>
                <div class="pt-2">
                    <div class="float-end">
                        <a href="{{ route('admin.users.index') }}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <a href="{{ route('admin.users.index') }}"><p class="text-white-50 mb-0 mt-1">Verify Users</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-start mini-stat-img me-4">
                        <img src="{{ asset('admin/images/services-icon/event.png') }}" alt="eventIcon">
                    </div>
                    <h5 class="font-size-16 text-uppercase text-white-50">Events</h5>
                    <h4 class="fw-medium font-size-24">{{ $events->count() }}</h4>
                </div>
                <div class="pt-2">
                    <div class="float-end">
                        <a href="{{ route('admin.events.index') }}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <a href="{{ route('admin.events.index') }}"><p class="text-white-50 mb-0 mt-1">Manage Events</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-start mini-stat-img me-4">
                        <img src="{{ asset('admin/images/services-icon/contact.png') }}" alt="contactIcon">
                    </div>
                    <h5 class="font-size-16 text-uppercase text-white-50">Contacts</h5>
                    <h4 class="fw-medium font-size-24">{{ $contacts->count() }}</h4>
                </div>
                <div class="pt-2">
                    <div class="float-end">
                        <a href="{{ route('admin.contacts.index') }}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                    </div>

                    <a href="{{ route('admin.contacts.index') }}"><p class="text-white-50 mb-0 mt-1">Manage Contacts</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row row-eq-height">
    
    <div class="col-lg-6">
        <div style="width:100%;height:100%;" class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Today Upcoming Events</h4>
                <ol class="activity-feed">
                    @forelse ($today_events as $event)
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">{{ date('D, d M Y', strtotime($event->date)).", ".date('h:i A', strtotime($event->time)) }}</span>
                            <span class="activity-text">{{ $event->title }}</span>
                        </div>
                    </li>
                    @empty
                    <div class="d-flex justify-content-center">
                        <p>No Today Upcoming Events</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.events.create') }}">Create an Event</a>
                    </div>
                    @endforelse
                </ol>
                <div class="d-flex justify-content-center">
                    {{ $today_events->appends(['upcoming_events'=>$upcoming_events->currentPage()])->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div style="width:100%;height:100%;" class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Upcoming Events</h4>
                <ol class="activity-feed">
                    @forelse ($upcoming_events as $event)
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">{{ date('D, d M Y', strtotime($event->date)).", ".date('h:i A', strtotime($event->time)) }}</span>
                            <span class="activity-text">{{ $event->title }}</span>
                        </div>
                    </li>
                    @empty
                    <div class="d-flex justify-content-center">
                        <p>No Upcoming Events</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.events.create') }}">Create an Event</a>
                    </div>
                    @endforelse
                </ol>
                <div class="d-flex justify-content-center">
                    {{ $upcoming_events->appends(['today_events'=>$today_events->currentPage()])->links() }}
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- end row -->
@endsection