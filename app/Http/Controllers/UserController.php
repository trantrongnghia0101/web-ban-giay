<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit($id)
{
    $user = User::find($id);
    if (!$user) {
        // Xử lý khi đối tượng người dùng không tồn tại
        abort(404, 'Người dùng không tồn tại.');
    }
    return view('user.edit', compact('user'));
}

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        // Lưu các thông tin đã được cập nhật vào database
        $user->save();

        return redirect()->route('home')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }
    
}