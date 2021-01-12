<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        // Validation
        $this->validationForm($request);
        // Register
        // Login
        // Redirect
    }

    private function validationForm(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|max:255|email|unique:users',
            'phone' => 'numeric|digits:11|nullable',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

}
