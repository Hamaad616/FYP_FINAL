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
                                <h4 class="card-title"></h4>
                                <h6 class="card-subtitle"> </h6>
                                <form class="form" method="post" action="{{url('sales')}}">
                                    {{csrf_field()}}
                                    <div class="form-group m-t-40 row">
                                        <label for="example-text-input" class="col-2 col-form-label">Size</label>
                                        <div class="col-10">
                                            <input class="form-control" name="size" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> 
                                            Color
                                        </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="color" value="" id="product-input">
                                        </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> Product Name</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="product_name" value="" id="product-input">
                                        </div>
                                    </div>
                                   <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> Per Item Price</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="per_item_price" value="" id="product-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-search-input" class="col-2 col-form-label"> No. of Products
                                        </label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="noproducts" value="" id="product-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <button type="submit" class="btn btn-success" style="margin-left: 400px">Submit</button>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
$(document).ready(function(){
  $("#add").click(function(){
    $("#clone").clone().appendTo("#body");
  });
  $(document).on("click", ".trash", function(){
   $(this).closest('#clone').remove();
});
});

</script>


@endsection