<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\admin;
use App\Models\delivaryman;


class LoginController extends Controller
{
    public function destroy(Login $login)
    {
        //
    }

    public function Login(){
        return view('pages.login.list');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'name'=> 'required',
                'password'=>'required'
            ],
            [
                'name.required'=> 'Please Enter your name',

                'password.required'=> 'Please Enter your password',
                
            ]
           
        );
    }


    public function loginSubmit(Request $request){
        $admin = delivaryman::where('name',$request->name)
                            ->where('password',$request->password)
                            ->first();
        //dd($admin);

        //return $admin;
        if($admin){
            $request->session()->put('user',$admin->name);
            //dd(session()->get('user'));
            return redirect()->route('delivarymanWelcome');
        }
        return back();
        if($delivaryman){
            $request->session()->put('user',$delivaryman->name);
            //dd(session()->get('user'));
            return redirect()->route('delivarymanWelcome');
        }
        return back();
        return "muta";
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
    
}
