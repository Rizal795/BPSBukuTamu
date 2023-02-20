<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Tamu;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $pegawai = Pegawai::count();
        $tamu = Tamu::count();
        $devisi = Devisi::count();
        return view('home', compact('tamu','devisi','pegawai','user'));
    }
}
