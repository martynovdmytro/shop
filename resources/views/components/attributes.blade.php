@props(['description'])

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Attributes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Description</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Comments</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active p-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <ul>
        @foreach($description as $attribute)
            <li>{{ $attribute->name }}:</li>
        @endforeach
        </ul>
    </div>
    <div class="tab-pane fade p-4" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, voluptatem.
    </div>
    <div class="tab-pane fade p-4" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, eaque.
    </div>
</div>
