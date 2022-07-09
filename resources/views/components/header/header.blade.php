<header class="text-gray-200 font-semibold">
    <nav>

        <x-header.nav />

    </nav>
    <section>
        @auth()
            <x-header.welcome />
        @else
            <x-header.create />
        @endauth
    </section>

    <section class="container-fluid">
        <div class="col-md-3 mx-auto relative relative top-40">
            <form class="d-flex" method="GET" name="search" action="/search">
                <input class="form-control me-2" name="search" type="text">
                <button class="btn btn-primary relative w-36 h-10 rounded-md">Search</button>
            </form>
        </div>
    </section>

</header>
