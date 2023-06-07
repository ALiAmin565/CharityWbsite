@extends('layouts.master')
@section('title')
    القائمة العلوية
@stop



@section('page-header')
<br>
<H1>       عرض الطلب  </H1>
@endsection


@section('content')

       <h1>الاسم :</h1>
        <h2>{{ $preo->name }}</h2>
        <hr>
        <h1>الاميل :</h1>
        <h2>{{ $preo->email }}</h2>
        <hr>   <h1>التلفون :</h1>
        <h2>{{ $preo->number }}</h2>
        <hr>   <h1>التفاصيل :</h1>
        <h2>{{ $preo->desc }}</h2>
        <hr>   <h1>وقت التسجيل  :</h1>
        <h2>{{ $preo->created_at->format('Y-m-d') }}</h2>
        <hr>



{{-- <h2>{{ $preo->name }}</h2> --}}




@endsection
