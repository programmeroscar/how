@section('title','Forgot Password')

<x-auth.section>
    <h3 class="mb-2">Forgot Password</h3>
    <p>Having trouble logging in? Enter your email and we’ll send you a recovery link to reset your password</p>
    <form action="{{ route('password.request') }}" method="post" class="pt-3">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                id="floatingEmail" placeholder="name@example.com" required>
            <label for="floatingEmail">Email</label>
            @error('email')
            <x-validation-error>{{ $message }}</x-validation-error>
            @enderror
        </div>
        <div class="d-grid pt-2">
            <button type="submit" class="btn btn-xl btn-primary">Send recovery email</button>
        </div>
        <div class="my-3 my-sm-4 d-flex">
            <a href="{{ route('login') }}" class="fs-8 text-blue-100 ms-auto mt-1">Remember your password? Login</a>
        </div>
    </form>
</x-auth.section>