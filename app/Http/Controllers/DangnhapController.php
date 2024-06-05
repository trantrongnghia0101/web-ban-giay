<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Session;
class DangnhapController extends Controller
{
    public function dangnhap(){
        return view('dangnhap');
       }
       public function login(Request $request)
       {
           $data = $request->validate([
               'name' => 'required',
               'password' => 'required',
           ]);
       
           $user = User::where('name', $data['name'])->first();
       
           if ($user && $user->password === $data['password']) {
               
               if ($user->remember_token == 1) {
                  
                   Session::put('login', true);
                   Session::put('user_id', $user->id);
                   Session::put('name', $user->name);
                   Session::put('email', $user->email);
           
                   return redirect()->route('admin')->with('status', 'Đăng nhập thành công');
               } else {
                   
                   Session::put('login', true);
                   Session::put('user_id', $user->id);
                   Session::put('name', $user->name);
                   Session::put('email', $user->email);
           
                   return redirect('/')->with('status', 'Đăng nhập thành công');
               }
           } else {
               return redirect()->back()->with('status', 'Sai tên đăng nhập hoặc mật khẩu');
           }
       }
}
