<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('halaman.backend.login');
    }

    public function authentikasi(Request $request)
    {
        $kredensial = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
        if (Auth::attempt($kredensial)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin');
    }
        return back()->with('loginError', 'Login Gagal !');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
