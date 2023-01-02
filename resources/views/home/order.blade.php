<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/images.png" type="">
      <title>Shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        
        .table_deg 
        {
            
            width: 70%;
            margin: auto;  
            text-align: center;

        }
        table, th, td
        {
            border: 1px solid black;
        }
        .th_deg 
        {
            background-color: skyblue;
            font-size: 20px;
            font-weight: bold;
            
        }
        .img_size 
        {
            width: 130px;
            height: 100px;
            align-content: center;
        
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <div>
            <table class="table_deg">
                <tr class="th_deg">
                    <th>Product Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Image</th>
                    <th>Cancel Order</th>
                </tr>
                @foreach ($order as $order)
                    
                
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td><img src="product/{{$order->image}}" class="img_size" alt=""></td>
                    <td>
                        @if($order->delivery_status=='processing')
                        <a class="btn btn-danger" onclick="return confirm('Are you sure Cancel this order?')" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                        @else
                        <p style="color: blue">Not Allowed</p>

                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
         </div>
      </div>
      <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By Oeung Chiva<br>
         
            KTMT04-K64
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>