<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AuthController extends Controller
{
    public function showLogin(){
        if(Auth::id() > 0){
            return redirect()->route('dashboard.index');
        }
        return view('auth.login');
    }

    public function login(ValidateRequest $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 
        // $email = $request->email;
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // session()->put('email', $email);
            return redirect()->route('dashboard.index')->with('success', 'Login success');
        }
        return redirect()->route('auth.login')->with('error', 'Thông tin hoặc mật khẩu không chính xác');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home.index');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $acount = new User();
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);

        $validated['role_id'] = 1;
        $acount->create($validated);
        return redirect()->route('auth.login')->with('success', "Đăng ký tài khoản thành công!");
    }
}