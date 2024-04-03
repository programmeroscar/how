<x-section breadcrumbTitle="Add User">
    <h2>Create User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="floatingInputName" placeholder="name" value="{{ old('name') }}" required>
                    <label for="name">Name</label>
                    @error('name')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="floatingInputEmail" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="floatingInputPassword" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="password" class="form-control" name="password_confirmation" id="floatingInputPassword"
                        placeholder="password">
                    <label for="password confirmation">Password Confirmation</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select location</option>
                        <option>Accra</option>
                        <option>Takoradi</option>
                        <option>Temal</option>
                    </select>
                    <label for="location">Location</label>
                    @error('location')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="department" class="form-control @error('department') is-invalid @enderror"
                        id="floatingInputDepartment" placeholder="department" value="{{ old('department') }}">
                    <label for="department">Department</label>
                    @error('department')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="employee_no"
                        class="form-control @error('employee_no') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Employee Number" value="{{ old('employee_no') }}">
                    <label for="employee number">Employee Number</label>
                    @error('employee_no')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="floatingInputTitle" placeholder="title" value="{{ old('title') }}">
                    <label for="title">Title</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="form-group col-md-12">
                <hr class="my-4">
                <h4>Roles</h4>
                @foreach ($roles as $role)
                <div class="form-check">
                    <input class="form-check-input" name="roles[]" type="checkbox" value="{{ $role->id }}">
                    <label class="form-check-label" for="checkbox">
                        <span>{{ $role->name }}</span>
                    </label>
                </div>
                @endforeach
            </div>

            <div class="col-md-6">
                <h4>Login Status</h4>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="disable_login" type="hidden" value="0">
                    <input class="form-check-input" name="disable_login" type="checkbox" value="1">
                    <label class="form-check-label" for="checkbox">Disable User Login</label>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Change Password</h4>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="force_password_change" type="hidden" value="0">
                    <input class="form-check-input" name="force_password_change" type="checkbox" value="1">
                    <label class="form-check-label" for="checkbox">Force Password Change</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
</x-section>