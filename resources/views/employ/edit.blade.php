@extends('layouts.app')

@section('content')

    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <h3 align="center" class="mt-5">Edit Employee</h3>

        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">

                <div class="form-area">
                    <form action="{{ url('employ/'.$employ->id.'/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <label>Employee First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{ $employ->firstname }}" 
                                id="firstname" placeholder="Enter first name">
                                @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-md-6">
                                <label>Employee Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{ $employ->lastname }}" 
                                id="lastname" placeholder="Enter last name">
                                @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-md-6">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $employ->phone }}" 
                                id="phone" placeholder="">
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="col-md-6">
                                <label>Employee DOB</label>
                                <input type="date" class="form-control" name="dob" value="{{ $employ->dob }}"
                                id="dob">
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-md-6">
                                <label>Employee DOB</label>
                                <input type="date" class="form-control" name="dob" value="{{ $employ->dob }}"
                                id="dob">
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-dark">Update</button>
                                <!-- <a href="{{ url('employ') }}" class="btn btn-secondary">Back</a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>   <!-- </div> div for navigation -->
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