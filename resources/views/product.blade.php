<x-layout>
    <section>
        <article class="container m-10">
            <div class="row">
                <div class="col-md-4">

                    <x-carousel-slide :product="$product"/>

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

