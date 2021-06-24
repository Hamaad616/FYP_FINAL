<html>
<body>

<div class="products-section my-orders container-fluid">
    <div class="my-profile">
        <div class="products-header">
            <h1 class="stylish-heading">My Seller Requests</h1>
        </div>

        <div class="col-xs-8">
            @foreach($requests as $request)
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="uppercase font-bold">ID</div>
                                <div>{{ $request->id }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">NAME</div>
                                <div>{{ $request->name }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">EMAIL</div>
                                <div>{{ $request->email }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">STATUS</div>
                                <div>
                                    @if($request->status == 1)
                                   <span class="label label-success font-weight-100">Approved</span>
                                    @else
                                        <span class="label label-danger font-weight-100">Not Approved</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="order-products table-responsive">

                            <div class="order-product-item">
                                <div>
                                    <div>
                                        <div class="uppercase font-bold">REASON</div>
                                        <div>{{ $request->reason }}</div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div> <!-- end order-container -->
            @endforeach
        </div>
    </div>
</div>


<div class="products-section my-orders container-fluid">
    <div class="my-profile">
        <div class="products-header">
            <h1 class="stylish-heading">My Bulk Requests</h1>
        </div>

        <div class="col-xs-10">
            @foreach($bulks as $bulk)
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items" >
                            <div>
                                <div class="uppercase font-bold">ID</div>
                                <div>{{ $bulk->id }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">PRODUCT NAME</div>
                                <div>{{ $bulk->product_name }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">EMAIL</div>
                                <div>{{ $bulk->email }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">QUANTITY</div>
                                <div>
                                    {{$bulk->quantity}}
                                </div>
                            </div>

                            <div>
                                <div class="uppercase font-bold">DESIRED AMOUNT</div>
                                <div>{{ $bulk->desired_amount }}</div>
                            </div>

                            <div>
                                <div class="uppercase font-bold">COUNTRY</div>
                                <div>{{ $bulk->country }}</div>
                            </div>

                            <div>
                                <div class="uppercase font-bold">STATUS</div>
                                <div>
                                    @if($bulk->status == 1)
                                        <span class="label label-success font-weight-100">Approved</span>
                                    @else
                                        <span class="label label-danger font-weight-100">Not Approved</span>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="order-products table-responsive">

                        <div class="order-product-item">
                            @if ($bulk->status === 1)
                                <div  class="quick-add-to-cart">
                                    <form method="post" class="cart" action="{{route('bulk.store', $bulk->id)}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$bulk->id}}">
                                        <input type="hidden" name="name" value="{{$bulk->product_name}}">
                                        <input type="hidden" name="amount_desired" value="{{$bulk->desired_amount}}">
                                        <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                            @else
                                <span class="mj_btn btn btn-warning">Your package is still being processed</span>
                            @endif
                        </div>

                    </div>
                </div> <!-- end order-container -->
            @endforeach
        </div>
    </div>
</div>


</body>
</html>
