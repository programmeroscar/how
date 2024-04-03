@section('title','Reset Password')

<x-public.auth-section title="Reset Password">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="form-group">
            <label for="password" class="mb-1"><strong>Password</strong></label>
            <input type="password" name="password" class="form-control @error('password') is-error @enderror">
            @error('password')
            <div class="alert alert-error mt-1" role="alert" required>
                {{ $message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="confirm password" class="mb-1"><strong>Confirm Password</strong></label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="d-flex justify-content-end">
            <div class="form-group text-primary">
                <a href="{{ route('login') }}"><u class="text-primary">Back to Login</u></a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        </div>
    </form>
</x-public.auth-section>