<x-section breadcrumbTitle="Device Types">
<h4>Create Device Type</h4>
    <form action="{{ route('type.store') }}" method="POST">
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
            <!-- <div class="form-floating">
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
                </div> -->
            </div>
            
            
            
           
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
    <div><br></br></div><br></br>

    <h2>Device Definition</h2>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap overflow-hidden">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>

                  
                </tr>
            </thead>
            <tbody class="list">
            @php($count=0)
                                             
                @foreach ($deviceType as $user)
                @php($count++)

                <tr>
                <td>{{$count}}</td>

                    <td><a href="{{ route('users.edit',$user->id) }}"><u>{{ $user->name }}</u></a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
