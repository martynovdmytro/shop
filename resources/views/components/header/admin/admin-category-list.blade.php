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
<header class="text-gray-200 font-semibold">
    <nav>
        <x-header.nav />
    </nav>
    <section>
        <div class="container">
            <div class="row">
                <article class="col-md-2 relative top-14">
                    <h4>Dashboard</h4>
                        <form class="m-1" method="GET" action="/admin/catalog">
                            <button class="btn btn-danger w-100" type="submit">Catalog</button>
                        </form>
                </article>
                <article class="col-md-6 offset-1 relative top-14">
                    <div class="list-group">
                        @foreach($categories as $category)
                            <div class="row bg-white rounded m-1">
                                <a class="col-md-3 nav-link text-black m-2" href="/admin/{{ $category->slug }}"><h5>{{ $category->name }}</h5></a>
                                <form class="col-md-2 offset-4" method="GET" action="#">
                                    <button class="btn btn-danger w-100 m-2" type="submit">Edit</button>
                                </form>
                                <form class="col-md-2" method="GET" action="#">
                                    <button class="btn btn-danger w-100 m-2" type="submit">Delete</button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </section>
</header>

<main>

    <x-marketplace />

</main>

<x-footer />

</body>
</html>


