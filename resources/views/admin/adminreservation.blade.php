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
    <h1>Customers' Reservations</h1>
    </div>
    <div style ="position: relative; top: 80px; right: -60px;">
       <table bgcolor = "rosybrown" align="center">
            <tr style="background-color: slategrey"> 
                <th style="padding: 30px;">Name</th>
                <th style="padding: 30px;">Email</th>
                <th style="padding: 30px;">Phone</th>
                <th style="padding: 30px;">Date</th>
                <th style="padding: 30px;">Time</th>
                <th style="padding: 30px;">Message</th>
            </tr>

            @foreach($data as $data)
            <tr align = "center" >
                <td style="padding: 30px;">{{$data->name}}</td>
                <td style="padding: 30px;">{{$data->email}}</td>
                <td style="padding: 30px;">{{$data->phone}}</td>
                <td style="padding: 30px;">{{$data->date}}</td>
                <td style="padding: 30px;">{{$data->time}}</td>
                <td style="padding: 30px;">{{$data->message}}</td>
            </tr>
            @endforeach
       </table> 




    </div>

  
  </div>
    @include("admin.adminscript")
  </div>
  </body>
</html>