@extends('layout.master')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2 mt-4">
            <a class="btn btn-success btn-samall" href="{{ url('/crud2/insert') }}"><i class="fa-solid fa-plus"></i> Add
                Data</a>
        </div>
        <div class="col-md-10 mt-4">
            <div class="card">
              
                <div class="card-body">
                  <h2 class="bg-primary text-light text-center py-2">Crud2 Informations</h2>
                    @if (Session::has('massage'))
                        <script>
                            swal("Grate job!", "{!! session::get('massage') !!}", "success", {
                                button: "ok",
                            })
                        </script>
                    @endif

                    <table class="table table-dark table-striped table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">massage</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($crud2 as $crud)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $crud->name }}</td>
                                    <td>{{ $crud->email }}</td>
                                    <td>{{ $crud->address }}</td>
                                    <td>{{ $crud->massage }}</td>
                                    <td>
                                        <a href="{{url('/crud2/show/'.$crud->id)}}"><i class="fa-solid fa-image text-light"></i></a>
                                        <a href="{{url('/crud2/edit/'.$crud->id)}}"><i class="fa-solid fa-pencil text-light"></i></a>
                                        <a href="{{url('/crud2/destroy/'.$crud->id)}}"><i class="fa-solid fa-trash-can text-light"></i></a>
                                    </td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                    <div class="align-middle">{{ $crud2->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
