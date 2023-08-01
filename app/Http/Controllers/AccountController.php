<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        return view('admin.settings.account.create', compact('roles'));
    }


     public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'f_name' => 'required',
            'm_name' => 'nullable',
            'l_name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'office' => 'required',
            'role_id' => 'required'
        ]);

        User::create($validatedData);

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
