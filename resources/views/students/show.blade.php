@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h2 class="text-center text-light">Student Details</h2>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Name: {{ $students->name }}</h5>
                        <p class="card-text">Email: {{ $students->email }}</p>
                        <p class="card-text">Address: {{ $students->address }}</p>
                        <p class="card-text">Mobile No: {{ $students->mobile }}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection