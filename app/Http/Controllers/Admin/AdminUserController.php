<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $user = User::paginate(10);
        $viewData = [
            'user' => $user
        ];
        return view('admin.user.index', $viewData);
    }
    
   public function destroy($id)
   {
       // Tìm người dùng theo ID
       $user = User::find($id);

       if ($user) {
           // Xóa người dùng
           $user->delete();
           // Thông báo thành công
           return redirect()->route('admin.user.index')->with('success', 'Người dùng đã được xóa thành công.');
       } else {
           // Thông báo thất bại
           return redirect()->route('admin.user.index')->with('error', 'Người dùng không tồn tại.');
        }
    }
}