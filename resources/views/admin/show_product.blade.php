<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
    .center
    {
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;

    } 
    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }
    .img_size
    {
        width: 150px;
        height: 150px;
        /* width: auto;
        height: auto; */
    }
    .th_color
    {
        background: skyblue;
        
    }
    .td_deg 
    {
        border: 2px solid white;
    }
    .th_deg
    {
        padding: 30px;
        border: 2px solid white;
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h2 class="font_size">All Products</h2>
            <table class="center">
                <tr class="th_color">
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Description</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Category</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Discount Price</th>
                    <th class="th_deg">Product Image</th>
                </tr>
                @foreach($product as $product)
                
                <tr >
                    <td class="td_deg">{{$product->title}}</td>
                    <td class="td_deg">{{$product->description}}</td>
                    <td class="td_deg">{{$product->quantity}}</td>
                    <td class="td_deg">{{$product->category}}</td>
                    <td class="td_deg">{{$product->price}}</td>
                    <td class="td_deg">{{$product->discount_price}}</td>
                    <td class="td_deg">
                        <img class="img_size" src="/product/{{$product->image}}" alt="">
                    </td>
                </tr>
                @endforeach
            </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
