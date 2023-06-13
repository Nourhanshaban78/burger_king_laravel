<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Guest;
use App\Models\Menu;
use App\Models\Chef;
use App\Models\Query;
use App\Models\Cart;
use App\Models\Order;



class AdminController extends Controller
{
    public function all_guest(){
        $guests = Guest::all();
        return view('admin.all_guest', compact('guests'));
    }
    public function menufood(){
        return view('admin.menu');
    }
public function addmenu(Request $request){
     $data = new Menu;
     $data->name = $request->name;
     $data->price = $request->price;
     $data->description = $request->description;
     $image=$request->image;
     $imagename=time().'.'.$image->getClientOriginalName();
     $request->image->move('foodimage', $imagename);
     $data->image=$imagename;
     $data->save();
     return redirect()->back();
}

public function getmenu(){
    $data=Menu::all();
    return view('admin.all_menu',compact('data'));
}

public function deleted($id){
    $data=Menu::find($id);
    $data->delete();
    return redirect()->back();
}



public function update_menu($id){
    $data=Menu::find($id);
    return view('admin.update_menu',compact('data'));
}


public function edit_menu(Request $request,$id){
    $data=Menu::find($id);
    $data->name = $request->name;
    $data->price = $request->price;
    $data->description = $request->description;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('foodimage', $imagename);
    $data->image=$imagename;
    $data->save();
    return redirect()->back();
}

public function chefs(){
    return view('admin.chef');
}

public function addchef(Request $request){
    $chef = new Chef;
    $chef->name = $request->name;
    $chef->speciality = $request->speciality;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('chefimage', $imagename);
    $chef->image=$imagename;
    $chef->save();
     return redirect()->back();
}

public function getchefs(){
    $chef=Chef::all();
    return view('admin.all_chefs',compact('chef'));
}

public function deleted_chef($id){
    $chef=Chef::find($id);
    $chef->delete();
    return redirect()->back();
}

public function updated_chef($id){
    $chef=Chef::find($id);
    return view('admin.updatechef',compact('chef'));
}

public function chef_updates_chef(Request $request,$id){
    $chef =Chef::find($id);
    $chef->name = $request->name;
    $chef->speciality = $request->speciality;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalName();
    $request->image->move('chefimage', $imagename);
    $chef->image=$imagename;
    $chef->save();
     return redirect()->back();
}




public function all_querys(){
    $data=Query::all();
    return view('admin.all_querys',compact('data'));
}

public function all_orders(){
    $data=Order::all();
    return view('admin.all_orders',compact('data'));
}

public function search(Request $request){
    $search=$request->search;
    $data=Order::where('name','Like','%'.$search.'%')->orwhere('foodname','Like','%'.$search.'%')->get();
    return view('admin.all_orders',compact('data'));
    }

























}
