<x-app-layout>
  
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
  
    @include("admin.admincss")

  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
<div class="container">
    <style>
    
    .header {
    
    text-align: center;
    padding: 30px;
    color:white;
    font-size: 15px;
    }


    </style>
    <div class="header">
    <h1>Customers' Orders</h1>
    </div>
    <div style="position: relative; top: 50px; right: -180px">

    <form action="{{url('/search')}}" method="get">
        <input type="text" name="search" style="color:blue;">
        <input type="submit" value="Search" class="btn btn-success">


    </form>
    <table>

        <tr align="center" style="background-color: orange;">

            <td style="padding: 30px;">Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address</td>
            <td style="padding: 30px;">Food Name</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Total Price</td>

        </tr>


        @foreach($data as $data)
        <tr align="center" style="background-color: black;" >
            <td style="padding: 30px;">{{$data->name}}</td>
            <td style="padding: 30px;">{{$data->phone}}</td>
            <td style="padding: 30px;">{{$data->address}}</td>
            <td style="padding: 30px;">{{$data->foodname}}</td>
            <td style="padding: 30px;">Tk.{{$data->price}}</td>
            <td style="padding: 30px;">{{$data->quantity}}</td>

            
            <td style="padding: 30px;">Tk.{{$data->price * $data->quantity}}</td>

        </tr>
        @endforeach

    </table>
    </div>
</div>

    @include("admin.adminscript")
  </div>
  
  </body>
</html>