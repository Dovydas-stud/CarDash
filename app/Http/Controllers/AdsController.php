<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function index()
    {
        // $ads = Ads::all();
        $ads = DB::table('ads')
            // ->orderBy('created_at', 'desc')
            ->join('users', 'users.id', '=', 'ads.users_id')
            ->paginate(20);
        return view('main.ads', compact('ads'));
    }

    public function add()
    {
        return view('main.ads_add');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:64',
            'description' => 'required|max:255',
        ]);
        $data["created_at"] = now();
        $data["updated_at"] = now();
        // dd($data);

        DB::insert(
            'INSERT INTO ads (title, description, users_id, created_at, updated_at) values (?, ?, ?, ?, ?)',
            [
                $data['title'],
                $data['description'],
                auth()->id(),
                $data['created_at'],
                $data['updated_at'],
            ]
        );
        // Ads::create($data);

        return redirect()->route('ads')->with('submitedAd');
    }
}
