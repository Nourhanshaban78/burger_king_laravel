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
        <form action="{{url('/addchef')}}" method="post" enctype="multipart/form-data">
            @csrf

   <div class="mb-3">
  <label  >Name of chef</label>
  <input type="text" style="color:black"  name="name" placeholder="name of chef">
   </div>


<div class="mb-3">
  <label  >Speciality</label>
  <input type="text" style="color:black"  name="speciality" placeholder="Speciality">
</div>

<div class="mb-3">
  <label >Image of Chef</label>
  <input name="image" type="file" require>
</div>

<div>
<input type="submit" class="btn btn-success" value="Add Chef">
</div>







</form>
</div>

















    @include('admin.script')
    
  </body>
</html>