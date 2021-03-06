@extends('layouts.supplier')

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
                        <h4 class="text-themecolor">Add Variant Value</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Edit Variant Value</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ url('supp_variant_value', $value->id) }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-body">

                                        <h5 class="card-title">About Variant Value</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" >

                                                    <label class="control-label">Variant Value Name</label>
                                                    <input type="text" id="name" name="name" class="form-control" value="{{$value->name}}" placeholder="Value Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Variant</label>
                                                    <select name="variant_id" class="form-control" data-placeholder="Choose a Variant" tabindex="1">
                                                        <option value="">Select Variant</option>
                                                        @foreach($variants as $variant)
                                                        <option value="{{ $variant->id }}">{{$variant->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->

                                            <!--/span-->
                                        </div>

                                    </div>
                                    <div class="form-actions m-t-40">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-dark">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
