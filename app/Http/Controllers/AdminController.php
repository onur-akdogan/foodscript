<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use CyrildeWit\EloquentViewable\Support\Period;
class AdminController extends Controller
{
    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Çıkış Yapıldı');
    }



    public function index(){

        return view('admin.index');

    }
}
