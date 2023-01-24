<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'time',
        'number_of_persons',
        'image',
    ];

    public function createPost($request)
    {
        // 画像アップロード処理
        $file_name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('', $file_name, 'public');

        $this->create([
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'time' => $request->time,
            'number_of_persons' => $request->persons,
            'image' => $path
        ]);
    }


    // リレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
