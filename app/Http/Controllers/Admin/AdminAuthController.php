<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // Correct import for the Auth facade
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function login(Request $request)
    {
        // Validate the request input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in with the provided credentials and isAdmin check
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => true])) {
            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }
    
        // Redirect back with an error message if login fails
        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }
    
    public function logout(Request $request)
    {
        // Log the user out and invalidate the session
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Add this for security purposes

        return redirect()->route('admin.login');
    }
}
