<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

// use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        $data = [
            'loginTitle' => 'Admin Login',
            'loginRoute' => route('admin.login.submit')
        ];
        return view('auth.admin-login', $data);
    }

    public function login(Request $request)
    {
        
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            // 'is_active' => 1
        ], $request->remember)) {
            Auth::guard('admin')->user()->updateLoginTime();
            // if successful, then redirect to their intended location
            // return redirect()->intended(route('admin.dashboard'));
            return redirect()->route('admin.dashboard');
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
    public function logoutForAll()
    {
        Auth::guard('admin')->logoutOtherDevices();
        return redirect('/');
    }
}
