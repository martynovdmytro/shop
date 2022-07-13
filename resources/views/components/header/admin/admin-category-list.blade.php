<x-header.admin.admin>
    <div class="list-group">
        @foreach($categories as $category)
            <div class="row bg-white rounded m-1">
                <a class="col-md-3 nav-link text-black m-2" href="/admin/{{ $category->slug }}"><h5>{{ $category->name }}</h5></a>
                <form class="col-md-2 offset-4" method="GET" action="#">
                    <button class="btn btn-danger w-100 m-2" type="submit">Edit</button>
                </form>
                <form class="col-md-2" method="GET" action="#">
                    <button class="btn btn-danger w-100 m-2" type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</x-header.admin.admin>
