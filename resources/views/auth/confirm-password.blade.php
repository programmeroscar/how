@section('title','Confim Password')

<x-confirm-password>
    <p>This is a secure area of the system. Please confirm your password before continuing</p>
    <form action="{{ url('user/confirm-password') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="mb-1"><strong>Password</strong></label>
            <input type="password" name="password" class="form-control @error('password') is-error @enderror" required>
            @error('password')
            <div class="alert alert-error mt-1"> {{ $message}} </div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
        </div>
    </form>
</x-confirm-password>