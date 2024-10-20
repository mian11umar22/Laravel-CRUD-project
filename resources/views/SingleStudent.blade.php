@extends('layout')

@section('title')
   Single Student's Record
@endsection

@section('content')

<div class="container mt-5">
  <h2 class="text-center mb-4">Student Record</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark text-center">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Grades</th>
            <th scope="col">Gender</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <th scope="row">{{ $student->id }}</th>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->grades }}</td>
            <td>{{ $student->gender }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
<a href="{{ route('student.index') }}" class="btn btn-danger mt-4 ">Back</a>
</div>
@endsection
