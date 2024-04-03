<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use DB;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function register(){ 
        return view('registration');
    }
    public function adduser(Request $request) {  
        // Validate the incoming request data
        $validatedData = $request->validate([
            'admin_name'       => ['required'],
            'admin_email'      => ['required', 'email'], // Add additional validation rules as needed
            'password'         => ['required'],
        ]);
    
        try {
            // Create a new Admin instance
            $admin = new Admin();
            $admin->admin_name = $validatedData['admin_name'];
            $admin->admin_email = $validatedData['admin_email'];
            $admin->admin_pass = $validatedData['password']; 
            // dd($request->all());

            // Save the Admin instance to the database
            $admin->save();
    
            // Redirect to the dashboard upon successful registration
            return redirect('/tradeimex-cms-login')->with('success', 'Registration successful. You can now login.');
        } catch (\Exception $e) {
            // Handle any exceptions that occur during registration
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }

    public function checkUser(Request $request)
    {
        // Retrieve user input from the form
        $credentials = [
            'admin_email' => $request->admin_email,
            'password' => $request->password,
        ];
    
        // Retrieve the admin record from the database based on the provided email
        $admin = Admin::where('admin_email', $credentials['admin_email'])->first();
    
        // Check if the admin exists and the provided password matches
        if ($admin && $admin->password === $credentials['password']) {
            // Authentication passed
            Auth::login($admin); // Manually log in the admin
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return redirect()->route('login')->with('admin-login-error', 'Invalid credentials');
        }
    }
    // Logout
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
