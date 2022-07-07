<x-layout>
    <section>
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-3 flex-column mt-2 mb-2">
                        <a href="/products/product">
                            <img class="img-fluid mx-auto p-2" src="{{ $product->image }}" />
                        </a>
                        <div class="text-center h-40 font-semibold">
                            <h4><a class="nav-link" href="/products/product">{{ $product->name }}</a></h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

