<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm() {
        return view('login');
    }

    public function showRegisterForm() {
        return view('register');
    }

    function authenticating(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        //cek login valid

        if (Auth::attempt($credentials)) {
            //cek status active/inactive
            if(Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
                session()->flash('status', 'failed');
                session()->flash('message', 'Account Anda Sedang Tidak Aktif, Untuk Informasi Lebih Lanjut Silahkan Hubungi Admin.');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard');
            }

            if(Auth::user()->role_id == 2){
                return redirect('profile');
            }
            // return redirect()->intended('dashboard');

        }
        session()->flash('status', 'failed');
        session()->flash('message', 'Account Anda Tidak Valid.');
        return redirect('/login');
    }

    function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    function register(Request $request) {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);
        
        $user = User::create($request->all());
        // The blog post is valid...
     
        session()->flash('status', 'success');
        session()->flash('message', 'Register Sukses, Silahkan Tunggu Admin Untuk Persetujuan.');
        return redirect('register');
    
        // dd($request->all());
    }
}
