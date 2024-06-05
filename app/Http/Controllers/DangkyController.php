<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class DangkyController extends Controller
{
    public function dangky()
    {
        return view('dangky');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:100',
            'password' => 'required|max:100',
        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = $data['password'];
        $user->save();

        // Lưu thông tin người dùng vào session
        Session::put('login', true);
        Session::put('user_id', $user->id);
        Session::put('name', $user->name);
        Session::put('email', $user->email);

        return redirect('/')->with('status', 'Đăng ký thành công');
    }
}