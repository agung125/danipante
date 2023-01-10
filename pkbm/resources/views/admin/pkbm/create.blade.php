@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data PKBM</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-folder"></i> Tambah Data PKBM</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.pkbm.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>NAMA PKBM</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Pkbm" class="form-control @error('nama') is-invalid @enderror">

                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NAMA PENGELOLA</label>
                                <input type="text" name="nama_pengelola" value="{{ old('nama_pengelola') }}" placeholder="Masukkan Nama Pengelola" class="form-control @error('nama_pengelola') is-invalid @enderror">

                                @error('nama_pengelola')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>HARGA</label>
                                <input type="text" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga" class="form-control @error('harga') is-invalid @enderror">

                                @error('harga')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>LOKASI</label>
                                <input type="text" name="lokasi" value="{{ old('lokasi') }}" placeholder="Masukkan Lokasi" class="form-control @error('lokasi') is-invalid @enderror">

                                @error('lokasi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>



                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop