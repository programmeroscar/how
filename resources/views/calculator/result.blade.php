<x-section breadcrumbTitle="Calculator">
<h4>Energy calculator</h4>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="floatingInputName" placeholder="name" value="{{ $data['name'] }}" readonly="">
                    <label for="name">Name</label>
                    @error('name')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-floating">
                    <select class="form-select" name="department" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="{{$data['department']}}">{{DB::table('department')->where('id',$data['department'])->value('name')}} </option>
                    </select>
                    <label for="location">Department</label>
                    @error('location')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="employee_no"
                        class="form-control @error('employee_no') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Employee Number" value="{{ $data['employee_no']}}" readonly>
                    <label for="employee number">Number of Device</label>
                    @error('employee_no')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="$data['']" reaadonly="">{{DB::table('baseload')->where('id',$data['baseloads'])->value('name')}} - Load / Device: {{DB::table('baseload')->where('id',$data['baseloads'])->value('baseload')}} - Error / Device: {{$data['uniterror']}}</option>
                       
                    </select>
                    <label for="title">Device</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="$data['']">{{$kwh}}</option>
                       
                    </select>
                    <label for="title">Total Kilowatt</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="$data['']">{{$perkwh}}</option>
                       
                    </select>
                    <label for="title">Kilowatt per Device</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="$data['']">{{$data['error']}}</option>
                       
                    </select>
                    <label for="title">Error</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="location" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option value="$data['']">{{$data['baseload']}}</option>
                       
                    </select>
                    <label for="title">Baseload</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
           
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
    <div><br></br></div><br></br>
    
</x-section>
