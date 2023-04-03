<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user; 
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Session;

class Login extends Controller
{
    public function index() : View {
        return view('doorsmeer.authentication.login_one');
    }

    // public function login(Request $request){
    //     $user = user::where('username', $request->username)
    //                 ->first();
                    

    //     // $credentials = $request->validate([
    //     //     'username' => ['required', 'username:dns'],
    //     //     'password' => ['required']
    //     // ]);
    //     // if (Auth::attempt($credentials)) {
    //     //     $request->session()->regenerate();
    //     //     return redirect()->intended('/dashboard');
    //     // }
        
    //     if (Hash::check($request->password, $user->password)) {
    //         Auth::login($user);
    //         return redirect()->route('index');
    //     }else {
    //         return back();
    //     }
    // }

    public function login(Request $request){
        $data = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        // return $data;

        if (Auth::attempt($data)) {
            return redirect()->route('index');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function gantiPassword(Request $request){
        $user = user::where('id', $request->id)->first();
        // return $user;

        if ($request->new_password == $request->konfirmasi) {
            if (Hash::check($request->password, $user->password)) {
                user::where('id', $request->id)->update(['password' => Hash::make($request->new_password)]);
                return redirect()->route('logout');
            }else {
                return back();
            }
        } else {
            return back();
        }
        
    }
}
