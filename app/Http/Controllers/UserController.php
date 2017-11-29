<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
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
        $password = $user->password;

                $oldpassword = $request->input('oldpassword');
                $newpassword = $request->input('newpassword');
            //if condition
                if ($password == $oldpassword){
                    $user->update(['password' => $newpassword]);
                    return back();
                }else{
                    echo "alert this password is false";
                } 
            }
            
    //edit profile 
    public function updateprofile(){
        return view('updateprofile');
    }

    public function editprofile(Request $request){
        $user = new User;
        $user = $user->find(1);

                $email = $request->input('email');
                $name = $request->input('name');

                $user->update(['email' => $email, 'name'=>$name]);
                return back();
    }
    

}
