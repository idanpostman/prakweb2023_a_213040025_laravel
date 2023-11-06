<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    // Method index
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    //METHOD STORE
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // dd('registrasi berhasil!');

        // $validatedData['password'] = bcrypt($validatedData['pasword']);
        $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);

        
        // Flash Message
        // $request->session()->flash('success', 'Registration successfull! Please login');


        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
