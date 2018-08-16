<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    protected $redirectTo = '/';

    public function __construct() {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create() {
        return view('Sessions.create');
    }

    public function store() {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back();
        }

        return redirect()->home();
    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }
}
