<x-layout>
    <section>
        <article class="container m-10">
            <div class="row">
                <div class="col-md-4">
                    <x-carousel-slide :product="$product" />
                </div>
                <div class="col-md-8">
                    <x-attributes :description="$description" />
                </div>
            </div>
        </article>
        <article class="container">
            <div class="card">
                <dev class="row">
                    <div class="col-md-3">
                        <img class="img-fluid p-1" src="/img/macbook.jpg" />
                        <h5 class="text-center">title</h5>
                    </div>
                    <div class="col-md-3">
                        <img class="img-fluid p-1" src="/img/macbook.jpg" />
                        <h5 class="text-center">title</h5>
                    </div>
                    <div class="col-md-3">
                        <img class="img-fluid p-1" src="/img/macbook.jpg" />
                        <h5 class="text-center">title</h5>
                    </div>
                    <div class="col-md-3">
                        <img class="img-fluid p-1" src="/img/macbook.jpg" />
                        <h5 class="text-center">title</h5>
                    </div>
                </dev>
            </div>
        </article>
    </section>
</x-layout>

