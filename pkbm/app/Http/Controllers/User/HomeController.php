<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pkbm;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $x = [];
        $x['slider'] = Slider::get();
        $x['pkbm'] = Pkbm::limit(3)->get();
        return view('user.beranda', $x);
    }
}
