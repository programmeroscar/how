@section('title','Security')
<x-section breadcrumbTitle="Login and Security">
    <h2>Update Password</h2>
    <p>Ensure your account is using a long password with numbers and special characters</p>
    <form action="{{ route('user-password.update') }}" method="POST" class="pt-3">
        @csrf
        @method('PUT')
        <div class="row g-4 col-md-8">
            <div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="current_password"
                        id="floatingInputCurrentPassword" placeholder="name@example.com">
                    <label for="current password">Current Password</label>
                </div>
            </div>
            <div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="floatingInputNewPassword"
                        placeholder="name@example.com">
                    <label for="new password">New Password</label>
                </div>
            </div>
            <div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password_confirmation"
                        id="floatingInputConfirmPassword" placeholder="name@example.com">
                    <label for="password">Confirm Password</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
    <hr class="my-5">
    <h2>Two Factor Authentication</h2>
    <p>@if (! auth()->user()->two_factor_secret)<span class="badge rounded-pill badge-sm badge-danger">Off</span>
        @endif
        Add additional security to your account using two factor authentication<br><br>
        When two factor authentication is enabled, you will be prompted for a secure, random token during
        authentication. You may retrieve this token from your phone's Google Authenticator application.</p>
    <div>
        @if (! auth()->user()->two_factor_secret)
        <form action="{{ url('user/two-factor-authentication') }}" method="POST" class="mt-2">
            @csrf
            <button type="submit" class="btn btn-primary mt-4">Enable</button>
        </form>
        @else
        <p>Scan the following QR code using your phone's authenticator application.</p>
        @endif
    </div>
    @if (auth()->user()->two_factor_secret)
    <div>
        {!! auth()->user()->twoFactorQrCodeSvg() !!}
    </div>
    <p class="mt-3">Store these recovery codes in a secure password manager. They can be used to recover
        access
        to your
        accout if your two factor authentication device is lost.</p>
    <div class="text-dark">
        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code )
        <div> {{ $code }} </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-start">
        <div>
            <form action="{{ url('user/two-factor-recovery-codes') }}" method="POST">
                @csrf
                <button type="submit" class="btn light btn-dark mt-4">Regenerate Recovery Codes</button>
            </form>
        </div>
        <div class="ml-3">
            @if ( auth()->user()->two_factor_secret)
            <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mt-4">Disable</button>
            </form>
            @endif
        </div>
    </div>
    @endif

</x-section>