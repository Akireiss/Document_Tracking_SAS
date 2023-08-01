<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();

    //         // Check the role of the authenticated user
    //         if ($user->role_id === 'Admin') {
    //             return redirect('admin/dashboard');
    //         } elseif ($user->role_id === 'Staff') {
    //             return redirect('office/index');
    //         }
    //     }

    //     return back()->withErrors(['login' => 'Invalid credentials.']);
    // }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
