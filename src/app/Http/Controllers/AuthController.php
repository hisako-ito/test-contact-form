<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Contact;
use App\Models\Category;
use App\Models\User;

class AuthController extends Controller
{
    public function admin()
    {
        $contacts = Contact::all();
        $contacts = Contact::with('category')->get();
        $categories = Category::all();
        $contacts = Contact::Paginate(7);
        return view('admin', compact('contacts', 'categories'));
    }

    /*public function store(UserRequest $request,
                        CreatesNewUsers $creator): RegisterResponse
    {
        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => Str::lower($request->{Fortify::username()}),
            ]);
        }

        event(new Registered($user = $creator->create($request->all())));

        $this->guard->login($user);

        return app(RegisterResponse::class);
        return redirect('/admin');
    }

    public function login(UserRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
            return view('/admin');
        });
    }*/
}
