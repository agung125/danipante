@extends('user.template')
@section('content')
    <div class="col-lg-12">
        <img src="{{$data->image}}" alt="" width="100%" height="auto" style="border-radius: 11px">
        <div class="">
        {!!$data->content!!}    
        </div>
    </div>
@endsection