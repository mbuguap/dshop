@extends('admin.layouts.app')

@section('title')
Admin Dashboard
@endsection

@section('main')


<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
      <div class="d-flex justify-content-between mb-5 align-items-center">
        <h3 class="mb-0 ">Ecommerce</h3>
        <a href="#!" class="btn btn-primary">Add Product</a>
      </div>
    </div>
  </div>
  <div class="row row-cols-1  row-cols-xl-4 row-cols-md-2 ">
    <div class="col mb-5">
      <div class="card h-100 card-lift">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted fw-semi-bold ">Orders</span>
            <span><i data-feather="shopping-cart" class="text-info"></i></span>

          </div>
          <div class="mt-4 mb-3 d-flex align-items-center lh-1">
            <h3 class="fw-bold  mb-0">5,312</h3>
            <span class="mt-1 ms-2 text-danger "><i data-feather="arrow-down" class="icon-xs"></i>2.29%</span>
          </div>
          <a href="#!" class="btn-link fw-semi-bold">View Orders</a>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card h-100 card-lift">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted fw-semi-bold ">Revenue</span>
            <span><i data-feather="dollar-sign" class="text-info"></i></span>

          </div>
          <div class="mt-4 mb-3 d-flex align-items-center lh-1">
            <h3 class="fw-bold  mb-0">$8,312</h3>
            <span class="mt-1 ms-2 text-success "><i data-feather="arrow-up" class="icon-xs"></i>2.29%</span>
          </div>
          <a href="#!" class="btn-link fw-semi-bold">View Earnings</a>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card h-100 card-lift">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted fw-semi-bold ">Customer</span>
            <span><i data-feather="user" class="text-info"></i></span>

          </div>
          <div class="mt-4 mb-3 d-flex align-items-center lh-1">
            <h3 class="fw-bold  mb-0">$15,312</h3>
            <span class="mt-1 ms-2 text-success "><i data-feather="arrow-up" class="icon-xs"></i>5.16%</span>
          </div>
          <a href="#!" class="btn-link fw-semi-bold">All Customer</a>
        </div>
      </div>
    </div>
    <div class="col mb-5">
      <div class="card h-100 card-lift">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-muted fw-semi-bold ">Balance</span>
            <span><i data-feather="credit-card" class="text-info"></i></span>

          </div>
          <div class="mt-4 mb-3 d-flex align-items-center lh-1">
            <h3 class="fw-bold  mb-0">$35.64k</h3>

          </div>
          <a href="#!" class="btn-link fw-semi-bold">Withdraw Money</a>
        </div>
      </div>
    </div>

  </div>



@endsection