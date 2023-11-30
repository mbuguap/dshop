@extends('admin.layouts.app')

@section('title')
Create Email Template
@endsection

@section('main')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="mb-5">
            <h3 class="mb-0">Create Email Template</h3>
        </div>
    </div>
</div>

<div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.store.email.template') }}">
                @csrf


                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">


                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Template Name </label>
                                <input type="text" name="name" class="form-control" placeholder="Template Name" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">Template Subject </label>
                                <input type="text" name="subject" class="form-control" placeholder="Template Subject" />
                            </div>

                            <div class="mb-4 col-12">
                                <label class="form-label">Description</label>

                                <textarea class="form-control" id="summernote" name="description"></textarea>

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


@endsection