<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guest;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Query;
use App\Models\Cart;
use App\Models\Order;



class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else{
           
            $data = Menu::all();
            $chef=Chef::all();
        return view('user.home',compact('data','chef'));
        }
    }
    
    public function redirect(){
        if (Auth::id()){
            if(Auth::user()->usertype=='0'){
              
               $data = Menu::all();
               $chef=Chef::all();
               $user_id = Auth::id();
               $count=Cart::where('user_id',$user_id)->count();
              return view('user.home',compact('data','chef','count'));
            }
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
        }
    }


public function about(){
    return view('user.about');
}
public function feature(){
    return view('user.feature');
}
public function chef(){
    $chef=Chef::all();
    return view('user.chef',compact('chef'));
}
public function menu(){
    $data = Menu::all();
    return view('user.menu',compact('data'));
}
public function book(){
    $data = Menu::all();
    return view('user.book',compact('data'));
}
public function contact(){
    return view('user.contact');
}
public function blog(){
    return view('user.blog');
}
public function single(){
    return view('user.single');
}
public function guest(Request $request){
    if(Auth::id()){  
    $data = new Guest;
    $data->user_id=Auth::user()->id;   
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->date = $request->date;
    $data->time = $request->time;
    $data->guest = $request->guest;
    $data->save();
    return redirect()->back()->with('message','guest Request Send Successful ');
    }
    else{
        return  redirect('/login');
        }

}

public function get_food(){
    $data = Menu::all();
    return view('user.menufood',compact('data'));

}
public function allchefget(){
    $chef = Chef::all();
    return view('user.chefsadd',compact('chef'));
}

public function query(Request $request){
    if(Auth::id()){
     $data = new Query;
    $data->user_id=Auth::user()->id;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->save();
    return redirect()->back()->with('message','Your Query Request Send Successful ');
    }
    else{
    return  redirect('/login');
    }
}

public function addcart(Request $request,$id){
    if(Auth::id()){
        $user_id = Auth::id();
        $foodid=$id;
        $quantity=$request->quantity;
        $cart= new Cart;
        $cart->user_id=$user_id;
        $cart->food_id=$foodid;
        $cart->quantity=$quantity;
        $cart->save();
        return redirect()->back();
    }
    else{
        return redirect('/login');
    }
}

public function showcart(Request $request,$id){
    $count=Cart::where('user_id',$id)->count();
    $data2=Cart::select('*')->where('user_id','=',$id)->get();
    $data=Cart::where('user_id',$id)->join('menus','carts.food_id','=','menus.id')->get();
   
    return view('user.showcart',compact('count','data','data2'));
}


public function remove($id){
    $data = Cart::find($id);
    $data->delete();
    return redirect()->back();

}


public function orderconfirm(Request $request){
    foreach($request->foodname as $key =>$foodname){
        $data = new Order;
        $data->foodname=$foodname;
        $data->price = $request->price[$key];
        $data->quantity = $request->quantity[$key];
        $data->name=$request->name;
        $data->address=$request->address;
        $data->phone=$request->phone;

        $data->save();
    }
    return redirect()->back();
}
















}
