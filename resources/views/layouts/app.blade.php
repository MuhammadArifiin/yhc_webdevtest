<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e63474f392.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <div class="navbar col-md-2">
                        <a href="{{ URL::to('/') }}" class="navbar-brand">Navbar</a>
                        <a href="{{ URL::to('projects') }}" class="nav-link">Projects</a>
                    </div>
                    <form action="{{ URL::to('projects') }}" method="GET" role="search"
                        class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Cari...">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>
            </nav>
        </div>

        <div class="row">
            @yield('content')
        </div>

        <div class="row">
            @yield('footer')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>