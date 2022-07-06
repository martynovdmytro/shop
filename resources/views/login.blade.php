<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My very first project</title>
</head>
<body>
<header class="text-gray-200 font-semibold">
    <nav>
        <div class="container">
            <div class="row collapse-horizontal">
                <div class="col-md-3">
                    <a class="navbar-brand" href="#">
                        <img src="/img/logo.png" class="img-fluid mt-3" alt="logo" />
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="navbar mt-2">
                        <button href="#" type="button" class="w-1/6">Home</button>
                        <button href="#" type="button" class="w-1/6">Catalog</button>
                        <button href="#" type="button" class="w-1/6">Delivery</button>
                        <button href="#" type="button" class="w-1/6">About Us</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle mt-3 ml-24" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <div class="bg-green-300 col-md-6 offset-3 relative top-20">
                    <form method="POST" name="login" action="#">
                        <div>
                            <h2>Login</h2>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</header>
<main>
    <section class="container section-category">
        <div class="img-fluid relative h-4/6 top-14">
                <img src="/img/macbook.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
                <img src="/img/camera.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
                <img src="/img/tablet.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
                <img src="/img/desctop.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
                <img src="/img/accessories.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
                <img src="/img/phone.jpg" class="col-md-4 float-md-start mx-auto p-0.5"/>
        </div>
    </section>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
</body>
</html>
