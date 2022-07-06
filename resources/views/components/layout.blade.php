<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
    <title>My very first project</title>
</head>
<body>
<header class="text-gray-200 font-semibold">
    <nav>
        <div class="container">
            <div class="row collapse-horizontal">
                <div class="col-md-3">
                    <a class="navbar-brand" href="/">
                        <img src="/img/logo.png" class="img-fluid mt-3" alt="logo" />
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="navbar mt-2">
                        <a class="nav-link" href="#">Home</a>
                        <a class="nav-link" href="#">Catalog</a>
                        <a class="nav-link" href="#">Delivery</a>
                        <a class="nav-link" href="#">About Us</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle mt-3 ml-24" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/login">Login</a></li>
                            <li><a class="dropdown-item" href="/register">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 relative h-72 top-16">
                    <div class="col-md-8 offset-2 absolute top-16">
                        <h2 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur est illo ipsa laudantium non, sapiente? Dolorem excepturi tempore vero?</h2>
                    </div>
                    <div class="absolute left-1/2 translate-middle-x bottom-0 mb-2">
                        <button class="btn btn-danger bg-red-600 w-36 h-10 rounded-md">button</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>

<main>

    {{ $slot }}

</main>

<footer class="text-gray-200 font-semibold">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-4 relative top-14">
                    <div class="text-center font-semibold m-2">
                        <h5>Lorem ipsum dolor sit amet, consectetur</h5>
                    </div>
                    <form class="d-flex" method="POST" name="subscribe">
                        <input class="form-control me-2" type="email" placeholder="Email" aria-label="Email">
                        <button class="btn btn-primary relative w-36 h-10 rounded-md">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</footer>
</body>
</html>
