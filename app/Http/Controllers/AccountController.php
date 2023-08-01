<?php

namespace App\Http\Controllers;

use App\Models\Office;
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
        $offices = Office::all();
        return view('admin.settings.account.create',
        compact('roles', 'offices'));
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'f_name' => 'required',
            'm_name' => 'nullable',
            'l_name' => 'required',
            'username' => 'required|string|unique:users|max:255',
            'password' => 'required|string|max:255',
            'role_id' => 'required',
            'office_id' => 'required',
        ]);

        // Create the user using the validated data
         User::create($validatedData);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'User Added Successfully'); // Replace 'success.route' with the actual route name to redirect after form submission.
    }
}
