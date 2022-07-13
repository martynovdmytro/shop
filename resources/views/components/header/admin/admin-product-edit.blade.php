<x-header.admin.admin>
    <form method="POST" name="register" enctype="multipart/form-data" action="/edit/{{ $product->slug }}">
        @csrf
        <div>
            <h2>Edit a product</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Title</label>
                <input name="title" type="text" value="{{ $product->title }}" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Slug</label>
                <input name="slug" type="text" value="{{ $product->slug }}" class="form-control">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input name="description" type="text" value="{{ $product->description }}" class="form-control">
        </div>
        <div class="row">
            <div class="col-md-2 mb-3">
                <label class="form-label">Price</label>
                <input name="price" type="text" value="{{ $product->price }}" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label class="form-label">Amount</label>
                <input name="amount" type="text" value="{{ $product->amount }}" class="form-control">
            </div>
            <div class="col-md-8 mb-3">
                <label class="form-label">Image</label>
                <input name="image" type="file" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <button type="submit" class="btn btn-primary w-100">Edit</button>
            </div>
            <div class="btn-group col-md-8 offset-2 mb-3">
                <select class="form-select" name="category" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option class="form-control">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
</x-header.admin.admin>


