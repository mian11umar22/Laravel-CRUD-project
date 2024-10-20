@extends('layout')
@section('title')
Add New Student
@endsection
@section('content')
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Enter name">

    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="text" value="{{ old('email') }}" class="form-control" name="email" placeholder="enter email">


    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" value="{{ old('address') }}" class="form-control" name="address"
            placeholder=" Enter address">

    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input type="text" value="{{ old('phone') }}" class="form-control" name="phone" placeholder=" Enter phone">

    </div>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Grades</label>
        <input type="text" value="{{ old('grades') }}" class="form-control" name="grades" placeholder=" Enter Grade">

    </div>

    <label for="gender">Gender:</label><br>

    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>

    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection