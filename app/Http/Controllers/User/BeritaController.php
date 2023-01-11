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
        return view('user.berita.all', $x);
    }
}
