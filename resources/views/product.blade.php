<x-layout>
    <section>
        <article class="container m-10">
            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/macbook.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/camera.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/tablet.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="col-md-10 mx-auto mt-2 text-center">
                        <b>Title</b>
                    </div>

                    <div class="row">
                        <button class="btn btn-danger col-md-10 mx-auto mt-2">Add to card</button>
                    </div>

                </div>
                <div class="col-md-8">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, veritatis.
                            </p>
                        </div>
                        <div class="tab-pane fade p-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, voluptatem.
                        </div>
                        <div class="tab-pane fade p-4" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, eaque.
                        </div>
                    </div>
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

