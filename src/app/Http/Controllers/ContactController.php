<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //お問い合わせフォーム表示
    public function index()
    {
        return view('index');
    }

    //入力内容確認ページの表示
    public function confirm(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell_left', 'tell_middle', 'tell_right', 'address', 'building', 'category_id', 'detail']);

        $full_name = $request->input('last_name') .  "  " . $request->input('first_name');

        $tell = $request->input('tell_left') .  $request->input('tell_middle') .  $request->input('tell_right');

        return view('confirm', compact('contact','full_name','tell'));
    }

    //完了ページの表示
    public function store(Request $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);
    }

}
