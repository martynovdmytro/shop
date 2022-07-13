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
{{--    {{ dd($product) }}--}}
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
                    <form method="POST" name="register" enctype="multipart/form-data" action="/edit/{{ $product->slug }}">
                        @csrf
                        <div>
                            <h2>Add a product</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Title</label>
                                <input name="title" type="text" value="{{ $product->title }}" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Slug</label>
                                <input name="slug" type="text" value="{{ $product->slug }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input name="description" type="text" value="{{ $product->description }}" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Price</label>
                                <input name="price" type="text" value="{{ $product->price }}" class="form-control">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label class="form-label">Amount</label>
                                <input name="amount" type="text" value="{{ $product->amount }}" class="form-control">
                            </div>
                            <div class="col-md-8 mb-3">
                                <label class="form-label">Image</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                            <div class="col-md-2 mb-3">
                                <button type="submit" class="btn btn-primary w-100">Edit</button>
                            </div>
                            <div class="btn-group col-md-8 offset-2 mb-3">
                                <select class="form-select" name="category" aria-label="Default select example">
                                    @foreach($categories as $category)
                                        <option class="form-control">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
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


