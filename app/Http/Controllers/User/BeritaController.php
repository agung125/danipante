<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $x = [];
        $x['data'] = Post::get();
        // return $x;
        return view('user.berita.all', $x);
    }

    public function detail($slug)
    {
        $x = [];
        $x['data'] = Post::where('slug', $slug)->first();
        // return $x;
        return view('user.berita.detail', $x);
    }
}
