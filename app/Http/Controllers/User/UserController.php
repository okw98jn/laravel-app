<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
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

    public function store(UserStoreRequest $request)
    {
        $user = $this->user_model->createUser($request);
        Auth::login($user);
        return redirect(route('user.show', $user->id))->with('flash_success', '登録が完了しました。');
    }

    public function index()
    {
        $users = $this->user_model->getUsers();
        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->user_model->getUser($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->user_model->getUser($id);
        return view('user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request)
    {
        $this->user_model->updateUser($request);
        return redirect(route('user.show', Auth::id()))->with('flash_success', 'プロフィールを更新しました');
    }

    public function destroy_confirm()
    {
        return view('user.destroy_confirm');
    }

    public function destroy()
    {
        $this->user_model->destroyUser();
        return redirect('/')->with('flash_success', '退会しました');
    }
}
