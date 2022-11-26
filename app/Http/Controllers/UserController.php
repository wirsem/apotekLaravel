<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
    	return view('user/login');
    }

    public function logged(Request $request)
    {
        $username = $request->username;
        $password = $request->password1;

        $user = User::where(['username' => $username])->first();
    
        if ($user->role=='1') {
            if ($user->password == md5($password)) {
                session([
                    'id' => $user->id,
                    'username' => $user->username, 
                    'email' => $user->email
                ]);
                return redirect('/home');
            } else {
                return redirect('/login')->with('error', 'Username/Password yang Anda masukkan salah!');
            }
        } elseif ($user->role=='0') {
            if ($user->password == md5($password)) {
            session([
                'id' => $user->id,
                'username' => $user->username, 
                'email' => $user->email
            ]);
            return redirect('/homeuser');
        } else {
            return redirect('/login')->with('error', 'Username/Password yang Anda masukkan salah!');
        }
        }else {
            return redirect('/login')->with('error', 'Username/Password yang Anda masukkan salah!');
        }
        
    }

    public function register()
    {
    	return view('user/register');
    }

    public function registered(AuthRequest $request)
    {
    	$data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => md5($request->password1),
        ];

        $saved = User::create($data);

        if ($saved) {
            return redirect('/login')->with('success', 'User baru berhasil diregister');
        } else {
            return redirect('/register')->withInput();
        }
    }

    public function logout()
    {   
        session()->forget(['id', 'username', 'email']);
        return redirect('/login')->with('success', 'Anda telah logout dari sistem');
    }

    public function kontak()
    {
    	
    	return view('user/kontakKami');		
    }

    public function praktikDokter()
    {
        return view('user/praktikDokter');
    }
}
