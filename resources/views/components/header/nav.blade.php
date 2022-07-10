<div class="container">
    <div class="row collapse-horizontal">
        <div class="col-md-3">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" class="img-fluid mt-3" alt="logo" />
            </a>
        </div>
        <div class="col-md-6">
            <div class="navbar mt-2">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="#">Catalog</a>
                <a class="nav-link" href="#">Delivery</a>
                <a class="nav-link" href="#">About Us</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle mt-3 ml-24" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                    @auth()
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    @else
                    <li><a class="dropdown-item" href="/register">Register</a></li>
                    <li><a class="dropdown-item" href="/login">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
