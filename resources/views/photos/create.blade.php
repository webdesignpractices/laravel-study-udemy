@extends('layouts.default')
@section('title','画像アプロード')
@section('content')
    @if(session()->has('success'))
        <p>{{session()->get('success')}}</p>
    @endif
    <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data"> 
    @csrf
    <label><input type="file" name="image"></label>
    <button type="submit">アップロード</button>
    </form>
@endsection