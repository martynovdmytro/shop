<header class="text-gray-200 font-semibold">
    <nav>

        <x-header.nav />

    </nav>
    <section>

        @auth()
            <x-header.welcome-auth />
        @else
            <x-header.welcom-guest />
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
    @if(session()->has('message'))
        <div class="bg-primary col-md-3 offset-9 position-fixed bottom-0 right-0 rounded-2 h-10 text-center" id="message">
            <h5 class="m-2">{{ session('message') }}</h5>
        </div>
    @endif
</header>
