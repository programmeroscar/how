@section('title','Two Factor Challenge')

<x-security-section>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="row no-gutters">
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#authentication-code" data-toggle="tab"
                                                class="nav-link active show">Use Authentication Code</a>
                                        </li>
                                        <li class="nav-item"><a href="#recovery-code" data-toggle="tab"
                                                class="nav-link">Use
                                                Recovery Code</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-4">
                                        <div id="authentication-code" class="tab-pane fade active show">
                                            <p>Please confirm access to your account by entering the authentication code
                                                provided by your authentication application</p>
                                            <form action="{{ url('two-factor-challenge') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="code" class="mb-1"><strong>Code</strong></label>
                                                    <input type="text" name="code"
                                                        class="form-control @error('code') is-error @enderror" required>
                                                    @error('code')
                                                    <div class="alert alert-error mt-1"> {{ $message}} </div>
                                                    @enderror
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-block">Log
                                                        In</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="recovery-code" class="tab-pane fade">
                                            <div class="profile-about-me">
                                                <p>Please confirm access to your account by entering one of your
                                                    emergency recovery codes</p>
                                                <form action="{{ url('two-factor-challenge') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="code" class="mb-1"><strong>Code</strong></label>
                                                        <input type="text" name="recovery_code"
                                                            class="form-control @error('recovery_code') is-error @enderror"
                                                            required>
                                                        @error('recovery_code')
                                                        <div class="alert alert-error mt-1"> {{ $message}} </div>
                                                        @enderror
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary btn-block">Log
                                                            In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-security-section>