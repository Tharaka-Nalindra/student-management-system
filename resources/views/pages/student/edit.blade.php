@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('student.update', $student->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="stu_name" value="{{ $student->stu_name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student DOB</label>
                            <input type="date" class="form-control" name="stu_dob" value="{{ $student->stu_dob }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="stu_adddress" value="{{ $student->stu_adddress }}">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-success" value="Update Now">
                        </div>

                    </div>
                </form>
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
            background-color:#b3e5fc;
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
