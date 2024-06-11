<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{


        public function index()
        {
                return view('login');
        }
        
        public function proses_login(Request $request)
        {
                $request->validate([
                        'username' => 'required',
                        'password' => 'required'
                ]);

                $credential = $request->only('username', 'password');

                if (Auth::attempt($credential)) {

                        $request->session()->regenerate();

                        $user =  Auth::user();
                        $request->session()->put('id', $user->id);

                        if ($user->level == 'admin') {
                                return redirect()->intended('dashboard');
                        }
                        else if ($user->level == 'user') {
                                return redirect()->intended('user/home');
                        }

                        return redirect()->intended('/');
                }

                return redirect('login')
                        ->withInput()
                        ->withErrors(['login_gagal' => 'These credentials does not match our records']);
        }

        public function register()
        {
                // tampilkan view register
                return view('register');
        }


        // aksi form register
        public function proses_register(Request $request)
        {
                $validator =  Validator::make($request->all(), [
                        'name' => 'required',
                        'username' => 'required|unique:users',
                        'email' => 'required|email',
                        'password' => 'required'
                ]);

                if ($validator->fails()) {
                        return redirect('/register')
                                ->withErrors($validator)
                                ->withInput();
                }

                $request['level'] = 'user';
                $request['password'] = bcrypt($request->password);

                User::create($request->all());

                // kalo berhasil arahkan ke halaman login
                return redirect()->route('login');
        }

        public function logout(Request $request)
        {
                // logout itu harus menghapus session nya 

                $request->session()->flush();

                // jalan kan juga fungsi logout pada auth 

                Auth::logout();
                // kembali kan ke halaman login
                return Redirect('login');
        }
}