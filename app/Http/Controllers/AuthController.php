<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = User::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session([
                    'berhasil_login' => true,
                    'name' => $data->name,
                    'is_admin' => $data->is_admin
                ]);
                return redirect('/dashboard');
            }
            return redirect()->route('login')->with('message', 'password  anda salah!');
        }
        return redirect()->route('login')->with('message', 'Email  anda salah!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
}
