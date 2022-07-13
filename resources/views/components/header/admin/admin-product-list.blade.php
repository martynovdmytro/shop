<x-header.admin.admin>
    <div class="list-group">
        <h4>Products</h4>
        @foreach($products as $product)
            <div class="row bg-white rounded m-1">
                <h5 class="col-md-3 m-1 text-black">{{ $product->title }}</h5>
                <form class="col-md-2 offset-4" method="GET" action="/admin/edit/{{ $product->slug }}">
                    <button class="btn btn-danger w-100 m-2" type="submit">Edit</button>
                </form>
                <form class="col-md-2" method="GET" action="/delete/{{ $product->slug }}">
                    <button class="btn btn-danger w-100 m-2" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</x-header.admin.admin>
