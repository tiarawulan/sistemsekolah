<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('homee');
    // }
    //  public function main()
    // {
    //     return view('layout.main');
    // }
    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect()->route('login');
    // }

    // public function login()
    // {
    //     return view('homee');
    // }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials, $request->remember)) {
    //         $request->session()->regenerate();
    //         return redirect()->route('main'); // ⬅️ MASUK KE DASHBOARD
    //     }

    //     return back()->with('failed', 'Email atau password salah');
    // }
    public function login()
    {
        return view('homee');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('main'); // GET /main ✔
        }

        return back()->with('failed', 'Email atau password salah');
    }

    public function main()
    {
        return view('layout.main');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
