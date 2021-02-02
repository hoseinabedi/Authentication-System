<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        // Validation
        $this->validationForm($request);
        // Register
        $user = $this->create($request);
        // Login
        Auth::login($user);
        // Redirect
        return redirect()->route('home')->with('registred',true);
    }

    private function validationForm(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|email|unique:users',
            'phone' => 'numeric|digits:11|nullable',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    private function create(Request $request){
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone,
        ]);
    }

}
