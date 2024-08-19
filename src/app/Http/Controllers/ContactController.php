<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {

        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);

        //上記のコードをcompact関数で書くと以下のようにシンプルに記述できる↓
        //return view('confirm', compact('contact'));
    }
}
