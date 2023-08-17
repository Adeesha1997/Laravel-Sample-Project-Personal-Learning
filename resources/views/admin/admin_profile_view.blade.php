@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="position-relative">
                        <div class="div" style="background-image:url(https://cdn.pixabay.com/photo/2019/01/05/19/02/rain-3915684_1280.jpg); width:100%; height:370px; background-repeat:no-repeat;background-size:cover">

                        </div>

                        <div
                            class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                            <div>
                                <img class="wd-70 rounded-circle" src="{{ (!empty($profileData->photo))?url('upload/admin_admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
                                <span class="h4 ms-3 text-dark">{{ $profileData->username }}</span>
                            </div>
                            <div class="d-none d-md-block">
                                <button class="btn btn-primary btn-icon-text">
                                    <i data-feather="edit" class="btn-icon-prepend"></i>Edit profile
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center p-3 rounded-bottom">
                        <ul class="d-flex align-items-center m-0 p-0">

                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="user"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                            </li>

                            <li class="ms-3 ps-3 border-start d-flex align-items-center">
                                <i class="me-1 icon-md" data-feather="image"></i>
                                <a class="pt-1px d-none d-md-block text-body" href="#">Photos</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row profile-body">
            <!-- left wrapper start -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 mb-4 left-wrapper ">
                <div class="card rounded">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="card-title mb-0">About</h6>

                        </div>

                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Name :</label>
                            <p class="text-muted">{{ $profileData->name }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Email address :</label>
                            <p class="text-muted">{{ $profileData->email }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone :</label>
                            <p class="text-muted">{{ $profileData->phone }}</p>
                        </div>
                        <div class="mt-3">
                            <label class="tx-11 fw-bolder mb-0 text-uppercase">Address :</label>
                            <p class="text-muted">{{ $profileData->address }}</p>
                        </div>
                        <div class="mt-3 d-flex social-links">
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="github"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="twitter"></i>
                            </a>
                            <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                <i data-feather="instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle" src="https://via.placeholder.com/37x37"
                                            alt="">
                                        <div class="ms-2">

                                            <p>Basic Form</p>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">


                                <form class="forms-sample">
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Name :</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            autocomplete="off" placeholder="Username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address :</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Phone :</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Address :</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Email">
                                    </div>


                                </form>

                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">

                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <button class="btn btn-secondary">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>
@endsection
