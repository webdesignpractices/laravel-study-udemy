@extends('layouts.default')
@section('title','画像アプロード')
@section('content')
    @if(session()->has('success'))
        <p>{{session()->get('success')}}</p>
    @endif
    <img src="{{asset('storage/photos/' . $fileName)}}" alt="">
@endsection