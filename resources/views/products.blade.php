<x-layout>
    <section>
        <div class="container">
            <div class="row">
            @foreach($products as $product)
                    <div class="col-md-3 flex-column mt-2 mb-2">
                        <a href="/product/{{ $product->slug }}">
                            <div class="position-relative">
                                <div class="position-absolute img w-100 h-100 rounded">
                                </div>
                                <img class="img-fluid img-thumbnail mx-auto p-2" src="{{ $product->image }}" />
                            </div>
                        </a>
                        <div class="img-thumbnail mt-2 p-3 h-40 font-semibold text-truncate">
                            <h5><a class="nav-link" href="/product/{{ $product->slug }}">{{ $product->title }}</a></h5>
                            <p>{{ $product->description }}</p>
                            <p>{{ $product->price }}$</p>
                            <form class="row pb-2" method="POST" action="/cart/store/{{ $product->slug }}">
                                @csrf
                                <button class="btn btn-danger col-md-10 mx-auto">Add to cart</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

