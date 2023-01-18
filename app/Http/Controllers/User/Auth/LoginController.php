<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // バリデーションカスタマイズ
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => ['required', 'string', 'max:200'],
            'password' => ['required', 'string', 'min:6'],
            'confirm_password' => ['required', 'same:password']
        ]);
    }

    public function username()
    {
        return 'email';
    }

    // ログイン後マイページへ遷移
    protected function redirectTo()
    {
        session()->flash('flash_success', 'ログインしました');
        return route('user.show', ['id' => Auth::id()]);
    }
}
