<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    //お問い合わせフォーム表示
    public function index()
    {
        $contact = Contact::with('category')->get();
        $categories = Category::all();
        return view('index', compact('contact', 'categories'));
    }

    //入力内容確認ページの表示
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);

        $full_name = $request->input('last_name') .  "  " . $request->input('first_name');

        // $tell = $request->input('tell_left') .  $request->input('tell_middle') .  $request->input('tell_right');

        return view('confirm', compact('contact','tell'));
    }

    //完了ページの表示
    public function store(ContactRequest $request)
    {
        // $tell = $request->input('tell_left') .  $request->input('tell_middle') .  $request->input('tell_right');
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);

        Contact::create($contact);

        return view('thanks');
    }

}
