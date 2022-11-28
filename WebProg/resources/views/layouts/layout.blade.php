<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giant Book Supplier | @yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
  <header class="bg-warning">
    <p id="header_title" class="text-center">Giant Book Supplier</p>
  </header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav mr-auto mx-auto">
        <li class="nav-item active">
          <a class="nav-link text-primary" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $c)
              <a class="dropdown-item" href="{{ route('category.getDetail', ['id' => $c->id]) }}">{{ $c->name }}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary" href="{{ route('publisher.showAll') }}">Publisher</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-primary" href="{{ route('contact') }}">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="main-content mx-auto">
    @yield('content')
  </div>
  
  <footer class="bg-primary">
    <p id="footer_text" class="text-center">&#169; Happy Book Store 2022</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>