<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $ads = DB::table('ads')
            ->join('users', 'users.id', '=', 'ads.users_id')
            ->limit(10)
            ->get();
        return view('dashboard', compact('ads'));
    }
}
