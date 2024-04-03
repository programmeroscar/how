<x-section breadcrumbTitle="Calculator">
<h4>Energy calculator</h4>
    <form action="{{ route('calculator.get') }}" method="POST">
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
                    <select class="form-select" name="department" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select department</option>
                        @foreach ($department as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    <label for="location">Location</label>
                    @error('location')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="employee_no"
                        class="form-control @error('employee_no') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Employee Number" value="{{ old('employee_no') }}">
                    <label for="employee number">Number of Devices</label>
                    @error('employee_no')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="hour"
                        class="form-control @error('employee_no') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Enter Number" value="{{ old('employee_no') }}">
                    <label for="hour">Usage Duration in Hours</label>
                    @error('hour')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" name="usage"
                        class="form-control @error('usage') is-invalid @enderror" id="floatingInputEmployeeNumber"
                        placeholder="Enter Number" value="{{ old('usage') }}">
                    <label for="hour">Enter Power Usage per device per minute</label>
                    @error('usage')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating">
                <select class="form-select" name="baseloads" id="floatingSelectLocation"
                        aria-label="Floating label select" required>
                        <option selected>Select Device Type</option>
                        @foreach ($baseload as $user)
                        <option value="{{$user->id}}">{{$user->name}} - {{DB::table('device')->where('id',$user->device)->value('name')}} - {{DB::table('devicetype')->where('id',$user->deviceType)->value('name')}}</option>
                        @endforeach
                    </select>
                    <label for="baseload">Device</label>
                    @error('baseload')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
           
        </div>
        <button type="submit" class="btn btn-primary mt-5">Create</button>
    </form>
    <div><br></br></div><br></br>
    
</x-section>
