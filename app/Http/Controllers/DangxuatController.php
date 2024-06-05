<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DangxuatController extends Controller
{
    public function dangxuat()
    {
        Session::flush(); // Xóa tất cả dữ liệu trong session
        return redirect('/')->with('status', 'Bạn đã đăng xuất thành công');
    }
}