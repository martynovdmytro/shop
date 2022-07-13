<x-header.auth.auth>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 relative top-14">
                <form method="POST" name="register" action="/create">
                    @csrf
                    <div>
                        <h2>Create an account</h2>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Login</label>
                        <input name="login" type="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-header.auth.auth>
