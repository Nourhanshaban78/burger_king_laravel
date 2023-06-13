<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.head')
  </head>
  <body>
    
    @include('admin.sidebar')
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
     
     <div  class="container"  style="padding-top:100px;">
 
         <form action="{{url('/chef-updates-chef',$chef->id)}}" method="post" enctype="multipart/form-data">
         
           @csrf
             
             <div  > <label> Name of Chef </label>
                 <input type="text" name="name"style="color:black;" value="{{$chef->name}}" require ></div>

                 
                 <div > <label> Speciality </label>
                 <input type="text" name="speciality"style="color:black;"  value="{{$chef->speciality}}" require></div>
 
                 

                 <div> <label>Old Image </label>
                 <img hight=150px; width=150px; src="chefimage/{{$chef->image}}" > </div>
 
                 <div > <label>New Image </label>
                 <input type="file" name="image" style="width:200px;" ></div>
 
                 <div style="padding:15px;"> 
                 <input type="submit" value="Updated Chefs" class="btn btn-info" ></div>
                 
 
         </form>
 
         
     </div>
 
           
     </div>
     


      

    @include('admin.script')
    
  </body>
</html>