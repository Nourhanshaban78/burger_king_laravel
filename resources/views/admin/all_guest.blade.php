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
 <th > Name</th>
 <th >Email</th>
 <th >Phone</th>
 <th >Date</th>
 <th >Time</th>
 <th> Guest</th>
</tr>

@foreach($guests as $guests)
<tr>
  <td>{{$guests->name}}</td>
  <td>{{$guests->email}}</td>
  <td>{{$guests->phone}}</td>
  <td>{{$guests->date}}</td>
  <td>{{$guests->time}}</td>
  <td>{{$guests->guest}}</td>
 </tr>

@endforeach


</table>




</div>


<div>
    @include('admin.script')
    
  </body>
</html>