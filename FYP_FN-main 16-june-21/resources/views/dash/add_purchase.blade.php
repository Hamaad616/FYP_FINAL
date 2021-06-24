@extends('layouts.dash')


@section('content')

 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Sales</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Sales</li>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Purchases</h4>
                                <h6 class="card-subtitle"> </h6>
                                <form class="form" method="post" action="{{url('purchase')}}">
                                    {{csrf_field()}}
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Vendor</label>
                                        <div class="col-10">
                                        <select name="vendor_name" class="form-control" data-placeholder="Choose a Vendor" tabindex="1">
                                            <option value="">Choose a vendor </option>
                                            @foreach($vendors as $vendor)
                                                <option value="{{ $vendor->name }}">{{$vendor->name}}</option>
                                                <input name="vendor_id" type="hidden" value="{{$vendor->id}}"></input>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>


                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Amount Received</label>
                                        <div class="col-10">
                                            <input class="form-control" name="amount_received" placeholder="Amount Received" type="text"  id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Number of Products</label>
                                        <div class="col-10">
                                            <input class="form-control" name="number_of_products" placeholder="Amount Received" type="text"  id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> Market Price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="number" name="cost"  placeholder="Cost" id="product-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> Manufacturing price </label>
                                        <div class="col-10">
                                            <input  class="form-control" type="number" name="price"  placeholder="Price" id="product-input">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


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
