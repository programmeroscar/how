<x-section breadcrumbTitle="Departments">
<h4>Create Department</h4>
    <form action="{{ route('department.store') }}" method="POST">
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
            
            </div>
            
            
            
           
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
    <div><br></br></div><br></br>
    <h2>Departments</h2>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap overflow-hidden">
            <thead>
                <tr>
                    <th>Name</th>
                 
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($department as $user)
                <tr>
                    <td><a href=""><u>{{ $user->name }}</u></a></td>
                    
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
