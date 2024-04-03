<x-section breadcrumbTitle="Error">
<h4>Create Error</h4>
    <form action="{{ route('error.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('error') is-invalid @enderror" name="error"
                        id="floatingInputName" placeholder="error" value="{{ old('error') }}" required>
                    <label for="error">Error Number</label>
                    @error('error')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-floating">
                    <select class="form-select" name="other" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select device</option>
                        @foreach ($baseload as $user)
                        <option value="{{$user->id}}">{{$user->name}} - {{$user->baseload}}</option>

                        @endforeach
                    </select>
                    <label for="other">Baseload</label>
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
                    <th>Device</th>
                    <th>Device Type</th>
                    <th>Baseload</th>
                    <th>Error</th>




                  
                </tr>
            </thead>
            <tbody class="list">
            @php($count=0)
                                             
                @foreach ($error as $user)
                @php($count++)

                <tr>
                <td>{{$count}}</td>
                    <td>{{DB::table('device')->where('id',$user->device)->value('name')}}</td>
                    <td>{{DB::table('devicetype')->where('id',$user->deviceType)->value('name')}}</td>
                    <td>{{DB::table('baseload')->where('id',$user->other)->value('baseload')}}</td>
                    <td>{{$user->error}}</td>
                    
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
