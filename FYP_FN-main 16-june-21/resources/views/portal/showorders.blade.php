<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Orders</title>
</head>
<body>

<div class="container">
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


<div class="products-section my-orders container-fluid">
    <div class="my-profile">
        <div class="products-header">
            <h1 class="stylish-heading">My Orders</h1>
        </div>

        <div class="col-xs-8">
            @foreach ($orders as $order)
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="uppercase font-bold">Order Placed</div>
                                <div>{{ $order->created_at }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">Order ID</div>
                                <div>{{ $order->id }}</div>
                            </div><div>
                                <div class="uppercase font-bold">Total</div>
                                <div>{{ $order->billing_total }}</div>
                            </div>
                        </div>
                        <div>
                            <div class="order-header-items">
                                @foreach ($order->products as $product) <div><a href="{{url('product_detail')}}/{{$product->id}}">Order Details</a></div>@endforeach
                                <div>|</div>
                                <div><a href="{{url('track')}}">Track Order</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="order-products table-responsive">
                        @foreach ($order->products as $product)
                            <div class="order-product-item">
                                <div><img src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image)}}" alt="item"></div>
                                <div>
                                    <div>
                                        <a class="font-bold" href="{{url('product_detail')}}/{{$product->id}}">{{ strtoupper($product->slug) }}</a>
                                    </div>
                                    <div class="font-bold">Price: ${{ $product->price }}</div>
                                    <div class="font-bold">Quantity: {{ $product->pivot->quantity }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end order-container -->
            @endforeach
        </div>
    </div>

</div>

</body>
</html>
