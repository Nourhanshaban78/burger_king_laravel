<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.head')
  </head>
  <body>
    
    @include('admin.sidebar')
    
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">
  <div style="padding-top:100px;" align="center">
    <table style="width:200 hight:200" bgcolor="gray">

<tr >
 <th style="padding:10;"> Name</th>
 <th style="padding:10;" >price</th>
 <th style="padding:10;">description</th>
 <th style="padding:10;">image</th>
 <th style="padding:10;">Delete</th>
 <th style="padding:10;">Update</th>
</tr>

@foreach($data as $data)
<tr>
  <td style="padding:10;">{{$data->name}}</td>
  <td style="padding:10;">{{$data->price}}$</td>
  <td style="padding:10;">{{$data->description}}</td>
  <td style="padding:10;"><img style="width:100 hight:100"  src="foodimage/{{$data->image}}"> </td>
  <td><a class="btn btn-info" href="{{url('/update_menu',$data->id)}}">Update</a></td>
  <td><a class="btn btn-danger" href="{{url('/deleted',$data->id)}}"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
 </tr>

@endforeach


</table>




</div>


      















    @include('admin.script')
    
  </body>
</html>