<?php

namespace App\Http\Controllers;

use App\User;
use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view('session.login');
    }

    public function login(Request $request){
        if(User::where('employee_id',$request->employee_id)->exists()){
            if(Auth::attempt(['employee_id' => $request->employee_id, 'password' => $request->password])){
                return redirect()->route('changepassword')->with('message','Welcome '.auth()->user()->name);
            }

            else{
                return back()->with('error','Wrong password, please try again');
            }
        }
        else{
            return back()->with('error','That employee id is not registered, please verify and try again');
        }
    }


    public function forgotPassword(){
        return view('session.forgot_password');
    }

    public function resetPassword(Request $request){
        if(User::where('employee_id',$request->employee_id)->exists()){
            $user=User::where('employee_id',$request->employee_id)->first();
            if($user->national_id==$request->national_id){
                $user->update(['password'=>bcrypt($user->employee_id)]);
                return redirect()->route('index')->with('message','User password successfully reset');
            }
            else{
                return back()->with('error','Wrong user national id, please verify and try again');
            }
        }
        else{
            return back()->with('error','Employee ID entered do not exists in our database, please verify and try again');
        }
    }


    public function users(){
        $users=User::where('employee_id','<>',auth()->user()->employee_id)->get();
        return view('user.users',compact('users'))->with('users_active','active');
    }

    public function saveUser(Request $request){

        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'required|confirmed|min:6'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->employee_id=$request->employee_id;
        $user->national_id=$request->national_id;
        $user->email=$request->email;
        $user->phonenumber=$request->phonenumber;
        $user->password=bcrypt($request->password);
        if($user->save()){
            return back()->with('message','User successfully added');
        }
        else{
            return back()->with('message','Something is wrong, please contact system admin');
        }
    }


    public function addUser(){
        return view('user.add_user');
    }



    public function changePassword(){
        return view('user.changepassword');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
