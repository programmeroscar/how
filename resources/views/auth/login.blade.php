@section('title','Sign In')

<x-auth.section>
    <h3 class=" mb-2">Sign in to Dashboard</h3>
    <form action="{{ route('login') }}" method="post" class="pt-3">
        @csrf
        <div class="form-floating mb-4">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                id="floatingEmail" placeholder="name@example.com" required>
            <label for="floatingEmail">Email</label>
            @error('email')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>

        <div class="form-floating mb-4">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="password"
                required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="d-grid pt-2">
            <button type="submit" class="btn btn-xl btn-primary">Sign In</button>
        </div>
        <div class="my-3 my-sm-4 d-flex">
            <a href="{{ url('forgot-password') }}" class="fs-8 text-blue-900 ms-auto mt-1">Forgot password?</a>
        </div>
    </form>
</x-auth.section>