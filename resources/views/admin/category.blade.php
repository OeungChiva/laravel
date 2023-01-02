<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
       .div-center
       {
        text-align: center;
        padding-top: 40px;
       }
       .h2_font
       {
        font-size: 40px;
        padding-bottom: 40px;
       }
       .input_color
       {
        color: black;
       }
       .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 2px solid white;
       }
       .th_deg
       {
        padding: 30px;
        border: 1px solid white;
        background-color: skyblue;
       }
       .td_deg{
        border: 1px solid white;
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

          @if(session()->has('message'))
            <div class="alert alert-success">  
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
          @endif

            <div class="div-center">
                <h2 class="h2_font">Add Category</h2>
                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input type="text" class="input_color" name="category" placeholder="Write category name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>

            <table class="center">
              <tr>
                <td class="th_deg">Category Name</td>
                <td colspan="2" class="th_deg">Action</td>
              </tr>
              @foreach($data as $data)
              <tr >
               <td class="td_deg">{{$data->category_name}}</td>
               <td class="td_deg">
                <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a>
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