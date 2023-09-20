@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="justify-content-center">
        <div class="p-5 bg-dark text-white text-center">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1 class="fw-bold text-uppercase h3">Admin Dashboard</h1>
                    </div>
                    <div>
                        <a class="text-light" style="text-decoration: none;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            @if (Session::has('flash_message'))
                <div class="alert {{ Session::get('flash_type') }}">
                    <h3>{{ Session::get('flash_message') }}</h3>
                </div>
            @endif
            <div class="row">
                <div class="d-flex justify-content-between my-2">
                    <div>
                        <h3>Student Details</h3>
                    </div>
                    <div>
                        <a type="button" href="{{ route('print') }}" class="btn btn-dark">Print</a>
                    </div>
                </div>
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Roll</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $item)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $item->student_name }}</td>
                                <td>{{ $item->student_email }}</td>
                                <td>{{ $item->student_phone }}</td>
                                <td>{{ $item->student_roll }}</td>
                                <td>{{ $item->student_description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection
