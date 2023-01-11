<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pkbm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PkbmController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:pkbms.index|pkbms.create|pkbms.edit|pkbms.delete']);
    }

    public function index()
    {
        $pkbms = Pkbm::latest()->when(request()->q, function ($pkbms) {
            $pkbms = $pkbms->where('name', 'like', '%' . request()->q . '%');
        })->paginate(10);

        return view('admin.pkbm.index', compact('pkbms'));
    }

    public function create()
    {

        return view('admin.pkbm.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:nama',
            'name' => 'required|nama_pengelola',
            'name' => 'required|harga',
            'name' => 'required|lokasi',
        ]);

        $pkbm = Pkbm::create([
            'name' => $request->input('nama'),
            'nama_pengelola' => $request->input('nama_pengelola'),
            'harga' => $request->input('harga'),
            'lokasi' => $request->input('lokasi'),

        ]);


        if ($pkbm) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.pkbm.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.pkbm.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update(Request $request, Pkbm $pkbm)
    {
        $this->validate($request, [
            'name' => 'required|unique:nama,nama,' . $pkbm->id,
            'name' => 'required|nama_pengelola',
            'name' => 'required|harga',
            'name' => 'required|lokasi',


        ]);

        $pkbm = Pkbm::findOrFail($pkbm->id);
        $pkbm->update([
            'name' => $request->input('name'),
            'nama_pengelola' => $request->input('nama_pengelola'),
            'harga' => $request->input('harga'),
            'lokasi' => $request->input('lokasi'),
        ]);

        if ($pkbm) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.pkbm.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.pkbm.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $pkbm = Pkbm::findOrFail($id);
        $pkbm->delete();

        if ($pkbm) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
