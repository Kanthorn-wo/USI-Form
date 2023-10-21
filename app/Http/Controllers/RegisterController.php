<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users|max:13',
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'password' => 'required|min:8|max:32',
            'confirm-password' => 'required|min:8|max:32|required_with:password|same:password|',
        ]);

        $data = array();
        $data['username'] = $request->username;
        $data['fname'] = $request->fname;
        $data['lname'] = $request->lname;
        $data['password'] = bcrypt($request->password);
        $data['role'] = $request->role;
        $data['created_at'] = now();
        DB::table('users')->insert($data);
        return redirect()->route('login')->with('success', "บันทึกข้อมูลสำเร็จ");
    }
}
