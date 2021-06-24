<html>
<body>
<table id="dtBasicExample" class="table table-striped table-bordered table-responsive">
    <thead>
    <tr>
        <th class="th">ID</th>
        <th class="th">NAME</th>
        <th class="th">EMAIL</th>
        <th class="th">REASON</th>
        <th class="th">STATUS</th>
    </tr>
    </thead>
    <tbody>
    @foreach($requests as $request)
    <tr>
        <td>{{$request->id}}</td>
        <td>{{$request->name}}</td>
        <td>{{$request->email}}</td>
        <td>{{$request->reason}}</td>
        <td>@if ($request->status === '1')
                <span class="mj_btn btn btn-success">Accepted</span>
            @else
                <span class="mj_btn btn btn-warning">Pending</span>
            @endif</td>
    </tr>
    @endforeach
    </tbody>
</table>


<table id="dtBasicExample" class="table table-striped table-bordered table-responsive">
    <thead>
    <tr>
        <th class="th">ID</th>
        <th class="th">PRODUCT NAME</th>
        <th class="th">EMAIL</th>
        <th class="th">MESSAGE</th>
        <th class="th">Quantity</th>
        <th class="th">Desired Amount</th>
        <th class="th">Country</th>
        <th class="th">STATUS</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bulks as $bulk)
        <tr>
            <td>{{$bulk->id}}</td>
            <td>{{$bulk->product_name}}</td>
            <td>{{$bulk->email}}</td>
            <td>{{$bulk->message}}</td>
            <td>{{$bulk->quantity}}</td>
            <td>{{$bulk->desired_amount}}</td>
            <td>{{$bulk->country}}</td>
            <td>@if ($bulk->status === 1)
                    <span class="mj_btn btn btn-success">Accepted</span>
                @else
                    <span class="mj_btn btn btn-warning">Pending</span>
                @endif</td>

            <td>@if ($bulk->status === 1)
                    <div  class="quick-add-to-cart">
                        <form method="post" class="cart" action="{{route('bulk.store', $bulk->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$bulk->id}}">
                            <input type="hidden" name="name" value="{{$bulk->product_name}}">
                            <input type="hidden" name="amount_desired" value="{{$bulk->desired_amount}}">
                            <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                        </form>
                    </div>

                    <div  class="quick-add-to-cart">
                        <a class="single-add-to-cart-button" href="{{route('bulk.index', $bulk->id)}}">Go to Cart</a>
                    </div>

                @else
                    <span class="mj_btn btn btn-warning">Proceed to checkout</span>
                @endif</td>

        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>
