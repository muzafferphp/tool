<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:employee', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
        $data = [
            'loginTitle' => 'Employee Login',
            'loginRoute' => route('employee.login.submit')
        ];
        return view('auth.employee-login', $data);
        return view('auth.employee-login');
    }
    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('employee')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            Auth::guard('employee')->user()->updateLoginTime();
            // if successful, then redirect to their intended location
            return redirect()->intended(route('employee.dashboard'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }


    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
