<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //change password
    public function update(){
        return view('changepassword');
    }

    public function edit(Request $request){

        $user = new User;
        $user = $user->find(1);
 
                $oldpassword = $request->input('oldpassword');
                $newpassword = $request->input('newpassword');
            
            //if condition 
            
                $user->update(['password' => $newpassword]);
                return back();
            }
            
    //edit profile 
    public function updateprofile(){
        return view('updateprofile');
    }

    public function editprofile(Request $request){
        $user = new User;
        $user = $user->find(1);

                $email = $request->input('email');
                $phone = $request->input('phone');
                $name = $request->input('name');

                $user->update(['email' => $email, 'phone'=> $phone, 'name'=>$name]);
                return back();
    }
    

}
