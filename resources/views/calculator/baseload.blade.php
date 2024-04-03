<x-section breadcrumbTitle="Baseload">
<h4>Create Baseload</h4>
    <form action="{{ route('baseload.store') }}" method="POST">
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
                    <input type="text" name="baseload"
                        class="form-control @error('baseload') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Base Number" value="{{ old('baseload') }}">
                    <label for="baseload">Base Number</label>
                    @error('baseload')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                
            </div>
            <div class="col-md-6">
            <div class="form-floating">
                    <select class="form-select" name="deviceType" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select device</option>
                        @foreach ($device as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach
                    </select>
                    <label for="deviceType">Type</label>
                    @error('deviceType')
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
                    <th>Device</th>
                    <th>Device Type</th>
                    <th>Baseload</th>



                  
                </tr>
            </thead>
            <tbody class="list">
            @php($count=0)
                                             
                @foreach ($baseload as $user)
                @php($count++)

                <tr>
                <td>{{$count}}</td>
                    <td><a href=""><u>{{ $user->name }}</u></a></td>
                    <td>{{DB::table('device')->where('id',$user->device)->value('name')}}</td>
                    <td>{{DB::table('devicetype')->where('id',$user->deviceType)->value('name')}}</td>
                <td>{{$user->baseload}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
