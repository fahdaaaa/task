<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>



    <style>
        .marg-top {
            margin-top: 30px;
        }

    </style>
    <title>Desgin</title>
</head>

<body>
    <section id="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar scroll</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Setting
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ url('user/profile') }}">profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">logout</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                view
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('countries.index') }}">countries</a></li>
                                <li><a class="dropdown-item" href="{{ route('states.index') }}">states</a></li>
                                <li><a class="dropdown-item" href="{{ route('cities.index') }}">cities</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Add
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ route('countries.create') }}">countries</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('states.create') }}">states</a></li>
                                <li><a class="dropdown-item" href="{{ route('cities.create') }}">cities</a></li>

                            </ul>
                        </li>





                        <li class="nav-item dropdown d-flex">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Permissions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="{{ url('countryPermissions') }}">countries</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('statesPermissions') }}">states</a></li>
                                <li><a class="dropdown-item" href="{{ url('citiesPermissions') }}">cities</a></li>

                            </ul>
                        </li>


                </div>
                </ul>


            </div>
        </nav>

    </section>
    <div class="container marg-top">
        <!-- Content here -->
        @yield('content')

    </div>
 

</body>

</html>
