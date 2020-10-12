<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function login_verify()
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect(route('admin.index'));
        } else {
            session()->flash('message', "<script>swal('Gagal','username / password salah','error')</script>");
            return back();
        }
    }
    /*
    *   Function update() / Menghandle update dari edit
    */
    public function update()
    {
        request()->validate([
            'old_password' => 'required',
            'password' => 'required',
        ]);

        if (Hash::check(request('old_password'), Auth::user()->password)) {
            Admin::where('username', Auth::user()->username)->update([
                'password' => bcrypt(request('password')),
            ]);
            session()->flash('message', "<script>swal('Berhasil','password diperbarui','success')</script>");
            return back();
        } else {
            session()->flash('message', "<script>swal('Gagal','password lama salah','error')</script>");
            return back();
        }
    }
}
