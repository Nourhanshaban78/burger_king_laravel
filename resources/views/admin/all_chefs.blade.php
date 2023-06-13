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
    <table class="table">

<tr >
 <th >Name Chef</th>
 <th >Speciality</th>
 <th >Image</th>
 <th >Update</th>
 <th >Delete</th>

</tr>

@foreach($chef as $chef)
<tr>
  <td>{{$chef->name}}</td>
  <td>{{$chef->speciality}}</td>
  <td><img src="chefimage/{{$chef->image}}"  ></td>
  <td><a class="btn btn-info" href="{{url('/updated_chef',$chef->id)}}">Update</a></td>
  <td><a class="btn btn-danger" href="{{url('/deleted_chef',$chef->id)}}"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
 </tr>
@endforeach



</table>




</div>


<div>
    @include('admin.script')
    
  </body>
</html>