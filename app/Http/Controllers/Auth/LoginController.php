<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

// use Illuminate\Support\Facades\RateLimiter;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    use ThrottlesLogins;
    protected $maxAttempts = 2; // Default is 5
    protected $decayMinutes = 2; // Default is 1

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->formValidation($request);
        if($this->hasTooManyLoginAttempts($request)){
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if($this->attemptLogin($request)){
            session()->regenerate();
            return redirect()->route('home');
        }
        $this->incrementLoginAttempts($request);
        return back()->with('wrongCredential',true);
    }

    private function formValidation(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
    }

    protected function attemptLogin(Request $request){
        return Auth::attempt($request->only('email','password'),filled('remember'));
    }

    public function logout(){
        session()->invalidate();
        Auth::logout();
        return redirect()->route('home');
    }

    public function profile(){
        return view('auth.profile');
    }

    public function username(){
        return 'email';
    }
}
