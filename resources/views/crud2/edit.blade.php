@extends('layout.master')
@section('title')
    Edit Data
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2 mt-4">
            <a class="btn btn-info" href="{{ url('/crud2/insert') }}"><i class="fa-solid fa-image"></i> Add data</a>
        </div>
        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/crud2/update/'.$crud2->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$crud2->name}}">

                            @error('name')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{$crud2->email}}">

                            @error('email')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$crud2->address}}">

                            @error('address')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Massage" name="massage" value = "{{$crud2->massage}}" style="height: 100px"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
