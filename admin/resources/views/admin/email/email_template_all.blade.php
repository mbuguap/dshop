@extends('admin.layouts.app')

@section('title')
All Email Templates
@endsection

@section('main')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="mb-5">
            <h3 class="mb-0">Email Templates</h3>
        </div>
    </div>
</div>
<div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-md-flex border-bottom-0">
                    <div class="flex-grow-1">
                        <a href="{{ route('admin.add.email.template') }}" class="btn btn-primary">+ Add Email
                            Template</a>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table id="example" class="table text-nowrap table-centered mt-0" style="width: 100%">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($templates as $key => $item)
                                <tr>

                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->subject }}</td>

                                    <td>

                                        <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                            data-template="eyeTwo">
                                            <i data-feather="eye" class="icon-xs"></i>
                                            <div id="eyeTwo" class="d-none">
                                                <span>View</span>
                                            </div>
                                        </a>

                                        <a href="{{ route('admin.edit.email.template',$item->id) }}"
                                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                            data-template="edit">
                                            <i data-feather="edit" class="icon-xs"></i>
                                            <div id="edit" class="d-none">
                                                <span>Edit</span>
                                            </div>
                                        </a>

                                        <a href="{{ route('admin.delete.email.template',$item->id) }}"
                                            class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                            data-template="trashTwo">
                                            <i data-feather="trash-2" class="icon-xs"></i>
                                            <div id="trashTwo" class="d-none">
                                                <span>Delete</span>
                                            </div>
                                        </a>

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
</div>


@endsection