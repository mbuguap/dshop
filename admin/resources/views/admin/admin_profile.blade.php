@extends('admin.layouts.app')

@section('title')
Admin Profile
@endsection

@section('main')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="mb-5">
            <h3 class="mb-0">Edit Profile</h3>
        </div>
    </div>
</div>

<div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data">
                @csrf


                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">

                            <div class="col-sm-6 mb-4">
                                <div>
                                    <!-- logo -->
                                    <h5 class="mb-2">Profile Pic</h5>

                                    @if ($admin->image!=null)
                                    <img id="showImage" class="img-4by3-sm rounded-3" src="{{ asset($admin->image) }}"
                                        alt="" />
                                    @else
                                    <img id="showImage" class="img-4by3-sm rounded-3"
                                        src="{{ url('uploads/preview.png') }}" alt="" />
                                    @endif

                                </div>
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Change Profile Pic</label>
                                <input class="form-control" name="image" id="image" type="file" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Your Name </label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    value="{{ $admin->name }}" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Your Email </label>
                                <input type="email" name="email" class="form-control" placeholder="Your Email"
                                    value="{{ $admin->email }}" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">New Password </label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="New Password" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Confirm New Password </label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Confirm New Password" />
                            </div>

                        </div>


                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                </div>


            </form>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});


</script>


@endsection