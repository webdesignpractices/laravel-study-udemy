@extends('layouts.default')
@section('title','イベント登録')
@section('content')
    <form action="{{route('events.store')}}" method="post">
    @csrf    
    <labal>イベント名:<input type="text" name="title"></label>
        <label><button type="submit">登録</button></label>
    </form>
@endsection