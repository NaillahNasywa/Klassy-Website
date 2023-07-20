<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LandingController extends Controller
{
    
    public function landing()
    {
        return view('Landing.register');
    }

    public function landing_action(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required|min:6'
        ]);
        // ], [
        //     'name.required' => 'E-mail Cannot Be Empity',
        //     'email.unique' => 'E-mail Has Been Used, Please Enter Your New Email',
        //     'password.required' => 'Password Cannot Be Empity',
        //     'phone_number' => 'isi no anda'

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        // $data =[
        //     'name'=>$request->name,
        //     'email' => $request->email,
        //     'phone_number'=>$request->phone_number,
        //     'password'=> Hash::make($request->password),
        // ];

        //kalo sukses
        return redirect()->route('login');
    } 
        // kalo 'gagal';
    //     return redirect('register')->withErrors('The Email And Password Entered Are Invalid');
    // }

    public function landingpage()
    {
        return view('Landing.login');
    }

    public function landingpage_action(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            //kalo sukses
            return redirect()->route('home');
        }
            // kalo 'gagal';
            return back('landingpage.lp')->with('Errors','email atau pw slh ');
        }

    public function password()
    {
        $data['title'] = 'Change Password';
        return view('Landing.password', $data);
    }

    public function password_action(Request $request)
    {
        $request->validate([
            'old_password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back()->with('success', 'Password changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('landingpage.lp')->route('login');
    }
}
