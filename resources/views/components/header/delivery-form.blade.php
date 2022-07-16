<x-header.delivery>
    <form method="POST" name="register" enctype="multipart/form-data" action="/admin/store">
        @csrf
        <div>
            <h2>Delivery form</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Surname</label>
                <input name="surname" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">Country</label>
                <input name="country" type="text" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Region</label>
                <input name="region" type="text" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">City</label>
                <input name="city" type="text" class="form-control">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Post Code</label>
                <input name="code" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Address</label>
                <input name="address" type="text" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control">
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <button type="submit" class="btn btn-primary">Create order</button>
        </div>
    </form>

</x-header.delivery>
