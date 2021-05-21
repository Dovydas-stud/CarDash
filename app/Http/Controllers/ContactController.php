<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Questions;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contacts::all();
        return view('main.contact', compact('contacts'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone_number' => 'required|max:255',
            'question' => 'required|max:500',
        ]);

        Questions::create($data);

        return redirect()->route('dashboard')->with('submitedQuestion');
    }
}
