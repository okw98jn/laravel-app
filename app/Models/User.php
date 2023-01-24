<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'introduction'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ユーザー登録
    public function createUser($request)
    {
        $user = $this->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return $user;
    }

    // ユーザー取得
    public function getUser($id)
    {
        $user = $this->find($id);
        return $user;
    }

    // 全ユーザーを取得
    public function getUsers()
    {
        $users = $this->paginate(10);
        return $users;
    }

    // ユーザー更新
    public function updateUser($request)
    {
        $user = $this->find(Auth::id());
        // 画像がアップロードされた場合
        if($request->image) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('', $file_name, 'public');
            $user->image = $path;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->introduction = $request->introduction;
        $user->save();
    }

    // ユーザー削除
    public function destroyUser()
    {
        $user = $this->getUser(Auth::id());
        $user->delete();
    }

    // リレーション
    public function user()
    {
        return $this->hasMany(Post::class);
    }
}
