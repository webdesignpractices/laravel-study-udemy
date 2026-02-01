@extends('layouts.default')
@section('title','イベント登録')
@section('content')
@if(session()->has('success'))
    <p>{{session()->get('success')}}</p>
@endif
    <form action="{{route('events.store')}}" method="post">
    @csrf    
    <labal>イベント名:<input type="text" name="title"></label>
        <label><button type="submit">登録</button></label>
    </form>
@endsection