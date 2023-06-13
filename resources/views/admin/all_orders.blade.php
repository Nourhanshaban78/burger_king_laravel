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
  <h1 >Customer Orders</h1><br>
  <form align="center" action="{{url('search')}}" method="get">
    @csrf
    <input type="text" name="search" style="color:black";>
    <input type="submit" value="Search" class="btn btn-outline-success">
  </form>

    <table class="table">

<tr >
 <th >Name</th>
 <th >Address</th>
 <th >Phone</th>
 <th >Food Name</th>
 <th >Price</th>
 <th >Quantity</th>
 <th>Total Price</th>

 
</tr>

@foreach($data as $data)
<tr>
  <td>{{$data->name}}</td>
  <td>{{$data->address}}</td>
  <td>{{$data->phone}}</td>
  <td>{{$data->foodname}}</td>
  <td>{{$data->price}}$</td>
  <td>{{$data->quantity}}</td>
 <td> {{$data->price * $data->quantity}}$</td>
  
 </tr>

@endforeach


</table>




</div>


<div>



















    @include('admin.script')
    
  </body>
</html>