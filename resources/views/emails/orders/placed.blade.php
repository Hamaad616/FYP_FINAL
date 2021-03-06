@component('mail::message')
 # Order Received

 Thank you for your order.

 **Order ID:** {{$order->id}}

 **Order Email:** {{$order->billing_email}}

 **Order Name:** {{$order->billing_name}}

 **Order Total:** {{$order->billing_total}}

 **Items Ordered:**

 @foreach($order->products as $product)
 Name: {{$product->product_name}}<br>
 Price: ${{$product->price}}<br>
 Quantity:{{$product->quantity}}
 @endforeach

 You can get further details of your product by signing in to our website

 @component('mail::button', ['url' => config('app.url'), 'color'=>'green'])
 Go to Website
 @endcomponent

 Thank you again for choosing us.

 Regards,<br>
 {{config('app.name')}}
@endcomponent
