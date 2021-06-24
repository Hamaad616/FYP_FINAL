@extends('layouts.dash')


@section('content')

<div class="page-wrapper">
    @if(session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session()->get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@endif
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Supplier</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Supplier</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Edit Supplier </h4>
                            </div>
                            <div class="card-body">
                            @foreach($requests as $request)
     	                        <form class="form-horizontal form-bordered" method="post" action="{{ route('suppliers.update', $request->id)}}">
                                    @method('patch')
                                    @csrf
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Supplier Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name" placeholder="Enter suppler name" class="form-control" value="{{ old('name', $request->name) }}">
                                                 </div>
                                        </div>

                                        <div class="form-group row">
                                           <label class="control-label text-right col-md-3">Quantity</label>
                                            <div class="col-md-9">
                                                <input type="text" name="quantity" placeholder="Enter Quantity" class="form-control" value="{{ old('quantity', $request->quantity) }}">
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                           <label class="control-label text-right col-md-3">Company Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="company_name" placeholder="Enter Company Name" class="form-control" value="{{ old('company_name', $request->company_name) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{ old('email', $request->email) }}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                           <label class="control-label text-right col-md-3">Phone</label>
                                            <div class="col-md-9">
                                                <input type="text" name="phone" placeholder="Enter Phone" class="form-control" value="{{ old('phone', $request->phone) }}">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                           <label class="control-label text-right col-md-3">Status</label>
                                            <div class="col-md-9">
                                                <input type="text" name="status" placeholder="Enter Status" class="form-control" value="{{ old('status', $request->status) }}">
                                                </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Reason</label>
                                            <div class="col-md-9">
                                                <input type="text" name="reason"  class="form-control" value="{{ old('reason', $request->reason) }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="offset-sm-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fa fa-check"></i> Save</button>
                                                        <button type="submit" class="btn btn-inverse" >Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
@endsection
