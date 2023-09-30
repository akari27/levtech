<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return $post->get();
        // get メソッドはPostモデルに関連付けられたデータベーステーブルからすべてのレコードを取得し、それを返す
    }
}