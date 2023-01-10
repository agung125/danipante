<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::latest()->paginate(6);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Pendaftaran"
            ],
            "data" => $pendaftaran
        ], 200);
    }

    /**
     * PhotoHomePage
     *
     * @return void
     */
    public function PendaftaranHomePage()
    {
        $pendaftaran = Pendaftaran::latest()->take(2)->get();
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Pendaftaran Homepage"
            ],
            "data" => $pendaftaran
        ], 200);
    }
}