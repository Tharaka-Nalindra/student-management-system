
@extends('layouts.app')


@section('content')

<div class="stu-manage-button-area">

    <a href="/student"><button class="btn btn-lg btn-success"> Manage Student </button></a>

</div>

@endsection

@push('css')
    <style>
        .stu-manage-button-area{
            margin-top:50px;
            text-align: center;
        }
    </style>

@endpush

