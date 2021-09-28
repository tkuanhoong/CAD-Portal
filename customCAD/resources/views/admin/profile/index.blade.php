@extends('layouts.admin')

@section('title')
<title>Admin Dashboard</title>
@endsection

@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Profile</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">Welcome to CADUTMKL Admin Dashboard</li>
            </ol>
        </div>
        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-cog me-2"></i> Settings
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->



<div class="row">
    
    
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Activity</h4>
                <ol class="activity-feed">
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">Jan 22</span>
                            <span class="activity-text">Responded to need “Volunteer
                                Activities”</span>
                        </div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">Jan 20</span>
                            <span class="activity-text">At vero eos et accusamus et iusto odio
                                dignissimos ducimus qui deleniti atque...<a href="#"
                                    class="text-success">Read more</a></span>
                        </div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">Jan 19</span>
                            <span class="activity-text">Joined the group “Boardsmanship
                                Forum”</span>
                        </div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">Jan 17</span>
                            <span class="activity-text">Responded to need “In-Kind
                                Opportunity”</span>
                        </div>
                    </li>
                    <li class="feed-item">
                        <div class="feed-item-list">
                            <span class="date">Jan 16</span>
                            <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                error sit rem.</span>
                        </div>
                    </li>
                </ol>
                <div class="text-center">
                    <a href="#" class="btn btn-primary">Load More</a>
                </div>
            </div>
        </div>
    
</div>
<!-- end row -->

<div class="row">
                            
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Latest Transaction</h4>
            <div class="table-responsive">
                <table class="table table-hover table-centered table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th scope="col">(#) Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col" colspan="2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#14256</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-2.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> Philip Smead
                                </div>
                            </td>
                            <td>15/1/2018</td>
                            <td>$94</td>
                            <td><span class="badge bg-success">Delivered</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#14257</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-3.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> Brent Shipley
                                </div>
                            </td>
                            <td>16/1/2019</td>
                            <td>$112</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#14258</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-4.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> Robert Sitton
                                </div>
                            </td>
                            <td>17/1/2019</td>
                            <td>$116</td>
                            <td><span class="badge bg-success">Delivered</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#14259</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-5.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                </div>
                            </td>
                            <td>18/1/2019</td>
                            <td>$109</td>
                            <td><span class="badge bg-danger">Cancel</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#14260</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-6.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> David Sanchez
                                </div>
                            </td>
                            <td>19/1/2019</td>
                            <td>$120</td>
                            <td><span class="badge bg-success">Delivered</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#14261</th>
                            <td>
                                <div>
                                    <img src="assets/images/users/user-2.jpg" alt=""
                                        class="avatar-xs rounded-circle me-2"> Philip Smead
                                </div>
                            </td>
                            <td>15/1/2018</td>
                            <td>$94</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection