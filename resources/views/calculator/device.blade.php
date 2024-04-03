<x-section breadcrumbTitle="Device">
<h4>Create Device</h4>
    <form action="{{ route('device.store') }}" method="POST">
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
                    <select class="form-select" name="description" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select device</option>
                        @foreach ($deviceType as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach
                    </select>
                    <label for="description">Type</label>
                    @error('location')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
           
            
            
            
           
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
    <div><br></br></div><br></br>
    <h2>Device</h2>
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
                                             
                @foreach ($device as $user)
                @php($count++)

                <tr>
                <td>{{$count}}</td>
                    <td><a href=""><u>{{ $user->name }}</u></a></td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
