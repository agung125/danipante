@extends('user.template')
@section('content')
@foreach($data as $key => $value)
<div class="col-lg-4">
    <div class="card" style="min-height: 570px; border-radius: 15px">
        <div class="card-body">
            <img src="{{$value->image}}" alt="" width="100%" height="auto" style="border-radius: 11px">
            <div class="">
                {{substr(strip_tags($value->content),0,120)}}
            </div>
            <a href="/berita/{{$value->slug}}">
            <button class="btn btn-primary mr-4" style="position: absolute; bottom: 10px; width: -webkit-fill-available; border-radius: 12px">Detail</button>
            </a>
        </div>
    </div>
</div>
@endforeach
@endsection