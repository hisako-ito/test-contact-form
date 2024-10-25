<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Contact;


class AuthController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    /* public function store(UserRequest $request)
     {
        $form = $request->all();
        User::create($form);
        return view('login');
    }

    public function destroy()
    {
        return view('login');
    }*/

}
