@extends('admin.admin_dashboard')
@section('admin')

    <div class="page-content">

        <div class="row profile-body">
            <!-- left wrapper start -->

            <!-- left wrapper end -->
            <!-- middle wrapper start -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle"
                                            src="{{ !empty($profileData->photo) ? url('upload/admin_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                                            alt="">
                                        <div class="ms-2">

                                            <p>Chnage Password</p>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">


                                <form class="forms-sample" method="POST" action="{{ route('admin.update.password') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Old Password :</label>
                                        <input type="password" class="form-control @error('old_password') is-invalid @enderror " id="old_password" name="old_password"
                                            autocomplete="off" >
                                            @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">New Password :</label>
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror " id="new_password" name="new_password"
                                            autocomplete="off" >
                                            @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputUsername1" class="form-label">Confirm New Password :</label>
                                        <input type="password" class="form-control " id="new_password_confirmation" name="new_password_confirmation"
                                            autocomplete="off" >

                                    </div>


                            </div>
                            <div class="card-footer">
                                <div class="d-flex post-actions">

                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>

                </div>
            </div>
            <!-- middle wrapper end -->
        </div>

    </div>


@endsection
