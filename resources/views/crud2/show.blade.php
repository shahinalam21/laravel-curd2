@extends('layout.master')
@section('title')
    Show data
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2 mt-4">
            <a class="btn btn-primary" href="{{url('/crud2/insert')}}"><i class="fa-solid fa-plus"></i> Add Data</a>
        </div>
        <div class="col-md-6 mt-4 m-auto">
            <div class="card bg-success text-light">
                <div class="card-body">
                    <h4 class="align-middle ">Your name : {{$crud2->name}}</h4>
                    <h4 class="align-middle ">Your email : {{$crud2->email}}</h4>
                    <h4 class="align-middle ">Your address : {{$crud2->email}}</h4>
                    <h4 class="align-middle ">Your massage : {{$crud2->massage}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection