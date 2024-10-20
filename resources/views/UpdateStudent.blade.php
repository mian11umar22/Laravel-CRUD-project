@extends('layout')
@section('title')
 Update Student Record
@endsection
@section('content')
<form action="{{ route('student.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text"  value="{{ $student->name }}" class="form-control"  name="name" placeholder="Enter name">
      
    
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="text" value="{{ $student->email }}"  class="form-control" name="email" placeholder="enter email">
      
  
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input type="text"  value="{{ $student->address }}" class="form-control" name="address" placeholder=" Enter address">
      
 
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Phone</label>
      <input type="text"  value="{{ $student->phone }}" class="form-control" name="phone" placeholder=" Enter phone">
      
    
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Grade</label>
        <input type="text"  value="{{ $student->grades }}"class="form-control" name="grades" placeholder=" Enter Grade">
        
      </div>
      
        <label for="gender">Gender:</label><br>
        
        <input type="radio" id="male" value="{{ $student->gender }}" name="gender" >
        <label for="male">Male</label><br>
    
        <input type="radio" id="female" name="gender" value="{{ $student->gender }}">
        <label for="female">Female</label><br>
        
         
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 
      
  @endsection