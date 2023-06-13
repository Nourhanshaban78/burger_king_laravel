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
        <form action="{{url('addmenu')}}" method="post" enctype="multipart/form-data">
            @csrf

   <div class="mb-3">
  <label  >Name of Food</label>
  <input type="text" style="color:black"  name="name" placeholder="name of food">
   </div>

<div class="mb-3">
  <label  >Price of Food</label>
  <input type="text" style="color:black"  name="price" placeholder="price">
</div>


<div class="mb-3">
  <label  >Description</label>
  <input type="text" style="color:black"  name="description" placeholder="description">
</div>

<div class="mb-3">
  <label >Image of food</label>
  <input name="image" type="file" require>
</div>

<div>
<input type="submit" class="btn btn-success" value="Add Food">
</div>







</form>
</div>

</div>
    @include('admin.script')
    
  </body>
</html>