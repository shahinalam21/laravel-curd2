@extends('layout.master')
@section('title')
    Insert data
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2 mt-4">
            <a class="btn btn-info" href="{{ url('/') }}"><i class="fa-solid fa-image"></i> Show data</a>
        </div>
        <div class="col-md-10 mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/crud2/store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">

                            @error('name')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">

                            @error('email')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control">

                            @error('address')
                                <div class="alert alart-danger ">{{ $message }}</div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="Massage" name="massage" style="height: 100px"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
