@extends('layout')

@section('title')
    All Students
@endsection

@section('content')

  <a href="{{ route('student.create') }}"  class="btn btn-success mb-4 mt-4 btn-sm">Add Student</a>
  <table class="table">
<thead >
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">grades</th>
      <th scope="col">gender</th>
      <th scope="col">view</th>
      <th scope="col">delete</th>
      <th scope="col">update</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($student as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->grades}}</td>
      <td>{{$item->gender}}</td>
      <td><a href="{{ route('student.show',$item->id) }}" class="btn btn-danger btn-sm">View</a></td>
      <td>
        <form action="{{ route('student.destroy',$item->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-light btn-sm">delete</button>
        </form>
        </td>
      <td><a href="{{ route('student.edit',$item->id) }}" class="btn btn-secondary btn-sm">update</a></td>
    </tr>
    @endforeach
  </tbody>

</table>
<div class="mt-5">
  {{ $student->links() }}
</div>
@endsection

