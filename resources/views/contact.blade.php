<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Contacts</title>
</head>

<body>
  <h1>Contact Managment System</h1>
  <a href="newcontact"  class="btn btn-success  btn-sm">AddUser</a>
  <table class="table">
    <thead >
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">view</th>
        <th scope="col">delete</th>
        <th scope="col">update</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->phone}}</td>
        <td><a href={{  route('contact.single' ,$item->id)}}  class="btn btn-danger btn-sm">View</a></td>
        <td><a href={{  route('contact.delete' ,$item->id)}}  class="btn btn-dark btn-sm">delete</a></td>
        <td><a href={{  route('single.contact' ,$item->id)}}  class="btn btn-secondary btn-sm">update</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>