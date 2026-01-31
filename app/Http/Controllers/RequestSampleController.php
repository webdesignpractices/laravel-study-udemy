<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestSampleController extends Controller
{
    public function form(){
        return view('form');
    }
    //public function queryStrings(Request $request){
    //     $keyword = '未設定';
    //     if($request->has('keyword')){
    //     $keyword = $request->keyword;
        
    //     }
    //     return 'キーワードは「'.$keyword.'」です。';
    // }
    public function queryStrings(Request $request){
        $keyword = $request->get('keyword','未設定');//第二引数はinputがない場合で送信のみの時のdefault値
        return 'キーワードは「'.$keyword.'」です。';
    }
    public function profile($id){
        return 'ID:'.$id;
    }
    public function productsArchive(Request $request,$category,$year){
        return 'category:'.$category.'<br>year:'.$year.'<br>page:'.$request->get('page',1);
    }
}
