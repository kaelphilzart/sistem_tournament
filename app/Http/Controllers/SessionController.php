<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\m_user;
use Illuminate\Validation\Rule;


class SessionController extends Controller
{
    //

    //login

    public function login(){
        return view('admin.login');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($attributes)) {
            $user = Auth::user(); // Mendapatkan objek pengguna yang berhasil login
            session()->regenerate();
    
            if ($user->level == 'admin') {
                return redirect('home')->with(['success' => 'You are logged in as admin.']);
            } elseif ($user->level == 'member') {
                return redirect('home-member')->with(['success' => 'You are logged in as member.']);
            }
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }


    //register

    public function register(){
        return view('admin.register');
    }

    public function createUser()
    {
        $attributes = request()->validate([
            'username' => ['required', 'max:50', Rule::unique('m_user', 'username')],
            'password' => ['required', 'min:5', 'max:20'],
        ]);
        $attributes['password'] = bcrypt($attributes['password'] );
        
        $user = m_user::create($attributes);
        Auth::login($user); 
        return redirect('dashboard');
    }

   

    //logout

    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }

    public function destroyMember()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
