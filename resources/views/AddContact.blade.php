<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Add Contact</title>
</head>
<form action="{{ route('contact.add') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  name="name" placeholder="Enter name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" placeholder="enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" name="address" placeholder=" Enter address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" name="phone" placeholder=" Enter phone">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>