<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function show(){
        $user = Auth::user();
        return view('profile.profile',compact('user'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('profile.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $profile= Profile::find($id);
        $profile->display_name = $request->display_name;
        $profile->address=$request->address;
        $profile->phone=$request->phone;
        $profile->age=$request->age;
        $profile->gender=$request->gender;
        $profile->dob=$request->dob;
        if($profile->update()){
            return redirect()->to('user/profile');
        }else{
            echo "fail";
        }

    }

    public function all(){
        $users= User::withTrashed()->get();
        return view('profile.all',compact('users'));
    }

    public function ban($id){
        $user= User::withTrashed()->where('id',$id)->first();
        if($user->deleted_at==null){
            $user->deleted_at=Carbon::now();
        }else{
            $user->deleted_at=null;
        }
        if($user->update()){
            return redirect()->back();
        }
    }
}
