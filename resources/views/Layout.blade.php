<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>@yield('title', 'Eloquent ORM')</title>
</head>

<body>
  <div class="container">
    <!-- Header Section -->
    <div class="row">
      <div class="col-12 bg-success text-center py-4">
        <h2 class="text-white">Eloquent ORM</h2>
      </div>
    </div>

    <!-- Title Section -->
    <div class="row">
      <div class="col-12 bg-light py-3">
        <h4 class="text-center">@yield('title')</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        
      </div>
    </div>

    <!-- Content Section -->
    <div class="row">
      <div class="col-12">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaFfLWzYr5JJzy5pYhZ2Lt+6Jf15gZ6P1sk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+dI2Y1pIVp4S82dQZf2K91+Eow5yIeTTLt8jFlHJjc5tF5nwE" crossorigin="anonymous"></script>
</body>

</html>
