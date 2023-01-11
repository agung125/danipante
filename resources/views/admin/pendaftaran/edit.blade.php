@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Pendaftaran</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Pendaftaran</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.pendaftaran.update', $pendaftaran->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('name', $pendaftaran->nama) }}" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ old('name', $pendaftaran->tanggal_lahir) }}">
                            </div>
                                <div class="form-group">
                                <label>Nomer</label>
                                <input type="number" name="nomer" value="{{ old('name', $pendaftaran->nomer) }}" placeholder="Masukkan nomer" class="form-control @error('nomer') is-invalid @enderror">
                                @error('nomer')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                                <div class="form-group">
                                <label>Foto ijazah</label>
                                <input type="file" name="foto_ijasah" class="form-control @error('foto_ijasah') is-invalid @enderror">
                                </div>
                                <div class="form-group">
                                <label>Foto identitas</label>
                                <input type="file" name="foto_identitas" class="form-control @error('foto_identitas') is-invalid @enderror">
                                </div>
                                <div class="form-group">
                                <label>Nama Ayah</label>
                                <input type="text" name="nama_ayah" value="{{ old('name', $pendaftaran->nama_ayah) }}" placeholder="Masukkan Nama Ayah" class="form-control @error('nama_ayah') is-invalid @enderror">
                                @error('nama_ayah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama ibu</label>
                                <input type="text" name="nama_ibu" value="{{ old('name', $pendaftaran->nama_ibu) }}" placeholder="Masukkan Nama Ibu" class="form-control @error('nama_ibu') is-invalid @enderror">
                                @error('nama_ibu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomer</label>
                                <input type="text" name="alamat" value="{{ old('name', $pendaftaran->alamat) }}" placeholder="Masukkan Alamat" class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Waktu</label>
                                <input type="date" name="waktu_pendaftaran" value="{{ old('name', $pendaftaran->waktu_pendaftaran) }}">
                            </div>

                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop