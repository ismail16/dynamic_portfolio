<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo;

    public function __construct()
    {
        if (Auth::check()) {
            $this->redirectTo = route('admin.dashboard');
        }

        $this->middleware('guest')->except('logout');
    }

}
