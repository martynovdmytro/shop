<x-layout>
    <section>
        <div class="container">
            <div class="img-fluid relative h-4/6">
                @foreach($categories as $category)
                    <a href="/category/{{ $category->id }}">
                        <img src="{{ $category->image }}" class="col-md-4 float-md-start mx-auto p-0.5"/>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>

