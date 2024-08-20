<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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

    //confirm.blade.phpのformタグから送信された値を受け取るstoreアクションの記述
    public function store(Request $request)
        {
            $contact = $request->only(['name', 'email', 'tel', 'content']);
            
            //createで$contactの変数に格納されたデータを作成できる
            Contact::create($contact);

            return view('thanks');
        }
}
