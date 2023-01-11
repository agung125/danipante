@extends('user.template')
@section('css')
@endsection
@section('content')
<div class="col-lg-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $key => $s)
            <div class="carousel-item @if($key==0) active @endif">
                <img class="d-block w-100" src="{{$s->image}}" alt="First slide">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="col-lg-12 mb-4 mt-4">
    <h2 class="text-center"><b>Program</b></h2>
</div>
<div class="col-lg-12">
    <div class="row">
        <div class="col-md-4">
            <h3>PKM Lentera Ilmu</h3>
            @foreach($pkbm as $key => $value)
            <div class="card" style="background-color: transparent !important; border: none !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('User/assets/img/400x300.jpg')}}" alt="" width="100%" height="auto" style="border-radius: 11px;">
                        </div>
                        <div class="col-md-6">
                            <h5>{{$value->nama}}</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                            </svg>
                            <small>{{$value->nama_pengelola}}</small>
                            <div class="d-flex">
                                <h6>Rp. {{number_format($value->harga)}}</h6>
                                {{-- <span class="badge badge-danger ml-2">Best Seller</span> --}}
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-sm btn-block mt-2" href="/detail/{{$value->nama}}">Pilih Kelas</a>
                </div>
            </div>
                
            @endforeach
        </div>
        <div class="col-md-4">
            <h3>PKM Lentera Ilmu</h3>
            @foreach($pkbm as $key => $value)
            <div class="card" style="background-color: transparent !important; border: none !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('User/assets/img/400x300.jpg')}}" alt="" width="100%" height="auto" style="border-radius: 11px;">
                        </div>
                        <div class="col-md-6">
                            <h5>{{$value->nama}}</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                            </svg>
                            <small>{{$value->nama_pengelola}}</small>
                            <div class="d-flex">
                                <h6>Rp. {{number_format($value->harga)}}</h6>
                                {{-- <span class="badge badge-danger ml-2">Best Seller</span> --}}
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-sm btn-block mt-2" href="/detail/{{$value->nama}}">Pilih Kelas</a>
                </div>
            </div>
                
            @endforeach
        </div>
        <div class="col-md-4">
            <h3>PKM Lentera Ilmu</h3>
            @foreach($pkbm as $key => $value)
            <div class="card" style="background-color: transparent !important; border: none !important;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('User/assets/img/400x300.jpg')}}" alt="" width="100%" height="auto" style="border-radius: 11px;">
                        </div>
                        <div class="col-md-6">
                            <h5>{{$value->nama}}</h5>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path>
                            </svg>
                            <small>{{$value->nama_pengelola}}</small>
                            <div class="d-flex">
                                <h6>Rp. {{number_format($value->harga)}}</h6>
                                {{-- <span class="badge badge-danger ml-2">Best Seller</span> --}}
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-sm btn-block mt-2" href="/detail/{{$value->nama}}">Pilih Kelas</a>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</div>
<div class="col-lg-12 p-2" style="height: auto; background-color: #ffc400;">
    <div class="text-center p-4" style="margin: 0px !important">
        <span class="judul">Title</span>
        <p style="color: black; font-weight: bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="row text-center">
        <div class="col">
            <span class="nomor">822+</span>
            <br>
            <b style="color: black">Lorem Ipsum is simply dummy text</b>
        </div>
        <div class="col">
            <span class="nomor">822+</span>
            <br>
            <b style="color: black">Lorem Ipsum is simply dummy text</b>
        </div>
        <div class="col">
            <span class="nomor">822+</span>
            <br>
            <b style="color: black">Lorem Ipsum is simply dummy text</b>
        </div>
        <div class="col">
            <span class="nomor">822+</span>
            <br>
            <b style="color: black">Lorem Ipsum is simply dummy text</b>
        </div>
        <div class="col">
            <span class="nomor">822+</span>
            <br>
            <b style="color: black">Lorem Ipsum is simply dummy text</b>
        </div>
    </div>
    <div class="d-flex justify-content-center">

    </div>
</div>
<div>
    <img src="{{asset('User/assets/img/1280x857.jpg')}}" alt="" width="100%">
</div>
@endsection
