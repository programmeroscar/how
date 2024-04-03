<x-section breadcrumbTitle="Your Profile">
    <h2>Edit Your Profile</h2>
    <form action="{{ route('profile.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="name" id="floatingInputName" placeholder="name"
                        value="{{ $user->name }}">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingInputEmail"
                        placeholder="name@example.com" value="{{ $user->email }}">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectLocation" name="location"
                        aria-label="Floating label select">
                        <option selected>{{ $user->location }}</option>
                        <option>Accra</option>
                        <option>Takoradi</option>
                        <option>Temal</option>
                    </select>
                    <label for="location">Location</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="department" id="floatingInputDepartment"
                        placeholder="department" value="{{ $user->department }}">
                    <label for="department">Department</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="employee_no" id="floatingInputEmployeeNumber"
                        placeholder="Employee Number" value="{{ $user->employee_no }}">
                    <label for="employee number">Employee Number</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="title" value="{{ $user->title }}"
                        id="floatingInputTitle" placeholder="title">
                    <label for="title">Title</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</x-section>