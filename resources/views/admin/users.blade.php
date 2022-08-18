

<x-app-layout>
  
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar")
    <div style = "position: relative; top: 120px; right: -250px; ">

        <table  bgcolor="darkturquoise" border="1px" >

            <tr align="center" bgcolor="mediumpurple" >
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>

            </tr>

            @foreach($data as $data)

            <tr align = "center" >
                <td style="padding: 30px;">{{$data->name}}</td>
                <td style="padding: 30px;">{{$data->email}}</td>

                @if($data->usertype=="0")

                <td style="padding: 30px;"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td style="padding: 30px;"><a> NOT ALLOWED</a></td>

                @endif
            </tr>
            @endforeach

        </table>

    </div>



    @include("admin.adminscript")
    </div>
  
  </body>
</html>

</body>
</html>