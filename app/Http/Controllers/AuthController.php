<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Volunteer;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
        public function showLoginForm()
        {
            return view('login_signin.login');
        }

        public function showRegisterForm()
        {
            return view('login_signin.register');
        }

        public function login(Request $request)
        {
            $request->validate([
                'type' => 'required|in:volunteer,organization',
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            $credentials = $request->only('email', 'password');
            $type = $request->input('type');
    
            if (Auth::guard($type)->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
    
            return back()->withErrors([
                'email' => 'Sai email hoặc mật khẩu.',
            ]);
        }
        

public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:volunteers,email',
        'password' => 'required|confirmed|min:6',
        'fullname' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'address' => 'required|string|max:255',
    ]);

    $volunteer = new Volunteer();
    $volunteer->volunteer_id = (string) Str::uuid();
    $volunteer->username = $request->username;
    $volunteer->email = $request->email;
    $volunteer->password = Hash::make($request->password);
    $volunteer->fullname = $request->fullname;
    $volunteer->phone = $request->phone;
    $volunteer->address = $request->address;
    $volunteer->role = 'volunteer';
    $volunteer->save();

    return redirect()->route('register.form')->with('success', 'Đăng ký thành công!');
}
}
