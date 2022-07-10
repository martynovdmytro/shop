<x-layout>
    <section>
        <div class="container">
            <div class="img-fluid h-4/6">
                @foreach($categories as $category)
                    <a href="/category/{{ $category->slug }}">
                        <div class="position-relative col-md-4 float-md-start mx-auto p-0.5">
                            <div class="position-absolute img w-100 h-100">
                                <h4 class="text-left p-lg-2 text-white-50">{{ $category->name }}</h4>
                            </div>
                                <img src="{{ $category->image }}" />
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

