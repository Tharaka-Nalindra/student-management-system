@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Student Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('sudent.save') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="stu_name">
                        </div>
                        <div class="col-md-6">
                            <label>Student DOB</label>
                            <input type="date" class="form-control" name="stu_dob">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input type="text" class="form-control" name="stu_adddress">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register Now">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key=> $student)
                            <tr>
                                <td scope="col">{{ ++$key }}</td>
                                <td scope="col">{{ $student->stu_name }}</td>
                                <td scope="col">{{ $student->stu_dob }}</td>
                                <td scope="col">{{ $student->stu_adddress }}</td>
                                <td scope="col">

                                    <a href="{{ route('student.edit', $student->id) }}">Edit</a>
                                    |
                                    <a href="{{ route('student.delete', $student->id) }}">Delete</a>

                                </td>
                            </tr>
                        @endforeach



                    </tbody>
                  </table>
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
