@extends('layouts.app')

@section('title')
Thankl you
@endsection

@section('thankyoustyle')
    <style>
        .thankyou{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .btn{
            background: #EFEFEF;
            color: #000000;
            border: none;
            border-radius: 0;
        }
        .btn:hover{
            background: #c9c9c9;
            color: #000000;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="thankyou">
            <div class="thankyou-content">
                <img src="{{asset('images_assets/appointment/thankyou.png')}}" alt="thankyou">
                <h1>Thank you</h1>
                <a class="btn btn-primary" href="{{ url('/') }}">Back to homepage</a>
            </div>
        </div>
    </div>
@endsection
