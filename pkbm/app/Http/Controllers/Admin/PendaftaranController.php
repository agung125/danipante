<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:pendaftarans.index|pendaftarans.create|pendaftarans.edit|pendaftarans.delete']);
    }


    


    public function index()
    {
        $pendaftaran = Pendaftaran::latest()->when(request()->q, function($pendaftaran) {
            $pendaftaran = $pendaftaran->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }


    public function create(){

        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'foto_ijasah' => 'required|foto_ijasah',
            'foto_identitas' => 'required|foto_identitas',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nomer' => 'required',
            'waktu_pendaftaran' => 'required',
            
        ]);

        //upload image
        $ijasah = $request->file('foto_ijasah');
        $identitas = $request->file('foto_identitas');
        $ijasah->storeAs('public/pendaftaran', $ijasah->hashName());
        $identitas->storeAs('public/pendaftaran', $identitas->hashName());

        $pendaftaran = Pendaftaran::create([
            'nama'          => $request->input('caption'),
            'tanggal_lahir' => $request->input('caption'),
            'alamat'        => $request->input('caption'),
            'foto_ijasah'   => $ijasah->hashName(),
            'foto_identitas'=> $identitas->hashName(),
            'nama_ayah'     => $request->input('caption'),
            'nama_ibu'      => $request->input('caption'),
            'nomer'         => $request->input('caption'),
            'waktu_pendaftaran'=> $request->input('caption')
            
        ]);

        $riw = Riwpendaftaran::create([

            'nama' => $pendaftaran->nama,
            'tanggal_lahir' => $pendaftaran->tanggal_lahir,
            'nama_ayah' => $pendaftaran->nama_ayah,
            'alamat' => $pendaftaran->alamat,
            'waktu_pendaftaran' => $pendaftaran->waktu_pendaftaran
        ]);

        if($pendaftaran){
            //redirect dengan pesan sukses
            return redirect()->route('admin.pendaftaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.pendaftaran.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $this->validate($request,[
            'nama'               => 'required|unique:pendaftarans,nama,'.$pendaftaran->id,
            'tanggal_lahir'      => 'required',
            'alamat'             => 'required',
            'nama_ayah'          => 'required',
            'nama_ibu'           => 'required',
            'nomer'              => 'required',
            'waktu_pendaftaran'  => 'required',
            
        ]);

        if ($request->file('pendaftaran') == "") {
        
            $pendaftaran = Pendaftaran::findOrFail($pendaftaran->id);
            $pendaftaran->update([

            'nama'          => $request->input('nama'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'alamat'        => $request->input('alamat'),
            'nama_ayah'     => $request->input('nama_ayah'),
            'nama_ibu'      => $request->input('nama_ibu'),
            'nomer'         => $request->input('nomer'),
            'waktu_pendaftaran'=> $request->input('waktu_pendaftaran'),
            ]);

        } else {

            //remove old image
            Storage::disk('local')->delete('public/pendaftaran/'.$pendaftaran->foto_ijasah);
            Storage::disk('local')->delete('public/pendaftaran/'.$pendaftaran->foto_identitas);

            //upload new image
            $ijasah = $request->file('pendaftaran');
            $ijasah->storeAs('public/pendaftarans', $pendaftaran->hashName());
            $identitas = $request->file('pendaftaran');
            $identitas->storeAs('public/pendaftarans', $pendaftaran->hashName());


            $pendaftaran = Pendaftaran::findOrFail($pendaftaran->id);
            $pendaftaran->update([
                'nama'              => $request->input('nama'),
                'tanggal_lahir'     => $request->input('tanggal_lahir'),
                'alamat'            => $request->input('alamat'),
                'foto_ijasah'       => $ijasah->hashName(),
                'foto_identitas'    => $identitas->hashName(),
                'nama_ayah'         => $request->input('nama_ayah'),
                'nama_ibu'          => $request->input('nama_ibu'),
                'nomer'             => $request->input('nomer'),
                'waktu_pendaftaran' => $request->input('waktu_pendaftaran'),
                    
            ]);

        }

        //assign tags
        $pendaftaran->pendaftarans()->sync($request->input('pendaftarans'));

        if($pendaftaran){
            //redirect dengan pesan sukses
            return redirect()->route('admin.pendaftaran.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.pendaftaran.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }



    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $ijasah = Storage::disk('local')->delete('public/pendaftaran/'.basename($pendaftaran->foto_ijasah));
        $identitas = Storage::disk('local')->delete('public/pendaftaran/'.basename($pendaftaran->foto_identitas));
        $pendaftaran->delete();

        if($pendaftaran){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

}
