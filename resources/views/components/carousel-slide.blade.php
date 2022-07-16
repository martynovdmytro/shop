@props(['product'])

<div id="carouselExampleIndicators" class="carousel slide img-thumbnail" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ $product->image }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ $product->image }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{ $product->image }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="img-thumbnail mt-2">
    <div class="col-md-10 mx-auto mt-2 text-left">
        <b>{{ $product->title }}</b>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }}$</p>
    </div>

    <form class="row pb-2" method="POST" action="/cart/{{ $product->slug }}">
        @csrf
        <button class="btn btn-danger col-md-10 mx-auto">Add to cart</button>
    </form>

    <div class="row pb-2">

    </div>
</div>


