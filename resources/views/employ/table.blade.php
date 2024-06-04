@extends('layouts.app')

@section('content')

    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thread>

                        <tbody>
                            @foreach ($employ as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->firstname}}</td>
                                    <td>{{$item->lastname}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->dob}}</td>
                                    <td>
                                        <a href="{{ url('employ/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        
                                        <a href="{{ url('employ/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" 
                                        onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush