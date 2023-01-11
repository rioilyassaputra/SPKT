<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login (){
        return view('admin.login');
    }

    public function loginproses(Request $request){
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::attempt($login)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('loginerror', 'login gagal');
    }

    public function register(){
        return view('admin.register');
    }

    public function registeruser(Request $request){
        $register = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => str::random(60),
        ]);
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('login');
    }
}
