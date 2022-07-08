<x-layout>
    <section>
        <div class="container">
            <div class="row">
            @foreach($products as $product)
                    <div class="col-md-3 flex-column mt-2 mb-2">
                        <a href="/product/{{ $product->slug }}">
                            <img class="img-fluid mx-auto p-2" src="{{ $product->image }}" />
                        </a>
                        <div class="text-center h-40 font-semibold">
                            <h4><a class="nav-link" href="/product/{{ $product->slug }}">{{ $product->title }}</a></h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

