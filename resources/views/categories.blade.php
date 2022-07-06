<x-layout>
    <section class="container section-category">
        <div class="img-fluid relative h-4/6">
            @foreach($categories as $category)
                <img src="{{ $category->image }}" class="col-md-4 float-md-start mx-auto p-0.5"/>
            @endforeach
        </div>
    </section>
</x-layout>

