<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $user_model;
    public function __construct(User $user_model)
    {
        $this->user_model = $user_model;
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        $user = $this->user_model->CreateUser($request);
        Auth::login($user);
        return redirect(route('user.show', $user->id))->with('flash_success', '登録が完了しました。');
    }

    public function show($id)
    {
        return view('user.show', compact('id'));
    }
}
