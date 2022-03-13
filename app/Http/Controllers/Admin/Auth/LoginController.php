<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Auth\StoreLoginRequest;

class LoginController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return redirect()->intended('admin/dashboard');
        }
        return view('auth/login');
    }

    public function login(StoreLoginRequest $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        } else {
            // return $this->sendFailedLoginResponse($request);
            return redirect()->back();
        }
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.login_failed')];
        return redirect(route('backend.auth.login'))->withInput($request->only($this->username(), 'remember'))
                ->withErrors($errors);
    }

    public function logout(Request $request) {

        if(Auth::user()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
        return redirect()->intended('backend/login');
    }
}
