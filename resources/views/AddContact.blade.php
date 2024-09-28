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
    <input type="text" value="{{ old('name') }}" class="form-control"  name="name" placeholder="Enter name">
    <span>
      <div class="text-danger">
      @error('name')
      {{ $message }}
      @enderror
    </span>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" value="{{ old('email') }}" class="form-control" name="email" placeholder="enter email">
    <span>
      <div class="text-danger">
      @error('email')
      {{ $message }}
      @enderror
    </span>

  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text"  value="{{ old('address') }}" class="form-control" name="address" placeholder=" Enter address">
    <span>
      <div class="text-danger">
      @error('address')
      {{ $message }}
      @enderror
    </span>
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text"  value="{{ old('phone') }}"class="form-control" name="phone" placeholder=" Enter phone">
    <span>
      <div class="text-danger">
      @error('phone')
      {{ $message }}
      @enderror
    </span>
  </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>