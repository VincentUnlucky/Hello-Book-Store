<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel 8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>HAPPY BOOK STORE</h1>
  </div>
  <div class="container">
    <ul class="nav  justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" href="#">Category</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('fiction') }}">Fiction</a></li>
          <li><a class="dropdown-item" href="{{ url('science') }}">Science</a></li>
          <li><a class="dropdown-item" href="{{ url('computer') }}">Computer</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
      </li>
    </ul>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8 p-3">
        <div>
            <div>
                <h2 class="container-fluid p-2 bg-warning">Book List</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope='col'>Title</th>
                        <th scope='col'>Author</th>
                    </tr>
                </thead>
            </table>
                    @forelse ($temps as $item)
                        <tr>
                            <a class="list-group-item bg-light" href="home/{{$item->book_id}}">
                                <span class="w-50 d-inline-block p-2">{{$item->title}}</span>
                                <span>{{$item->author}}</span>
                            </a>
                        </tr>
                        @empty
                        <p>No Data</p>
                    @endforelse
            </div>
        </div>
      </div>
      <div class="col-sm-2">
          <br>
        <h2 class="container-fluid p-1 bg-warning">Category</h2>
            <p><a class="nav-link" href="{{ url('/fiction') }}">Fiction</a></p>
            <p><a class="nav-link" href="{{ url('/science') }}">Science</a></p>
            <p><a class="nav-link" href="{{ url('/computer') }}">Computer</a></p>
      </div>
    </div>
  </div>

  <div class="container p-1 mt-5 bg-primary text-white text-center">
    <small>&copy Happy Book Store {{ date("Y") }}</small>
  </div>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>


