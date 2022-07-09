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

</header>
