<?php

namespace App\Http\Controllers;

use App\Models\Watt;
use App\Models\Error;
use App\Models\Device;
use App\Models\Baseload;
use App\Models\Department;
use App\Models\DeviceType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CalculatorController extends Controller
{
    public function __construct(Department $department,DeviceType $deviceType,Baseload $baseload,Device $device,Error $error,Watt $watt)
    {
        $this->middleware('auth');
        $this->department = $department;
        $this->deviceType = $deviceType;
        $this->baseload = $baseload;
        $this->device = $device;
        $this->error = $error;
        $this->watt = $watt;

        // $this->middleware(['role:SuperAdmin|Admin']);
    }
    /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device =Device::all();
        $deviceType = DeviceType::all();
        $baseload = Baseload::all();
        $department = Department::all();
        $error = Error::all();
        return view('calculator.index',compact('device', 'deviceType', 'baseload', 'department'));
    }
    public function type()
    {
        $deviceType = DeviceType::all();
        return view('calculator.type',compact('deviceType'));
    }
    public function device()
    {
        $device = Device::all();
        $deviceType = DeviceType::all();
        return view('calculator.device',compact('device','deviceType'));
    }
    public function base()
    {
        $device =Device::all();
        $deviceType = DeviceType::all();
        $baseload = Baseload::all();
        return view('calculator.baseload',compact('device','deviceType','baseload'));
    }
    public function error()
    {
        $device =Device::all();
        $deviceType = DeviceType::all();
        $department = Department::all();
        $baseload = Baseload::all();
        $error = Error::all();

        return view('calculator.error',compact('device','deviceType','department','baseload','error'));
    }
    public function department()
    {
  
        $department = Department::all();
        return view('calculator.department',compact('department'));
    }
    public function watt()
    {
        $device =Device::all();
        $deviceType = DeviceType::all();
        $department = Department::all();
        $watt = Watt::all();
        return view('calculator.watt',compact('device','deviceType','department','watt'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function departmentStore(Request $request)
    {
        Validator::make($request->all(), [

            'name' => 'required',
        ])->validate();
        $data = $request->all();
        $department = $this->department::create($request->all());
        return redirect()->route('department.index')->withMessage('Data added');
    }
    public function typeStore(Request $request)
    {
        Validator::make($request->all(), [

            'name' => 'required',
        ])->validate();
        $data = $request->all();
        $deviceType = $this->deviceType::create($request->all());
        return redirect()->route('type.index')->withMessage('Data added');
    }
    public function deviceStore(Request $request)
    {
        Validator::make($request->all(), [

            'name' => 'required',
        ])->validate();
        $data = $request->all();
        $device = $this->device::create($request->all());
        return redirect()->route('device.index')->withMessage('Data added');
    }
    public function baseStore(Request $request)
    {
        $request['device'] = Device::where('id',$request['deviceType'])->value('id');
        Validator::make($request->all(), [

            'name' => 'required',
            'deviceType' => 'required',
            'baseload' => 'required',
        ])->validate();
        $data = $request->all();
        $baseload = $this->baseload::create($request->all());
    
        return redirect()->route('base.index')->withMessage('Data added');
    }
    
    public function errorStore(Request $request)
    {
        $request['deviceType'] = Baseload::where('id',$request['other'])->value('deviceType');
        $request['device'] = Baseload::where('id',$request['other'])->value('device');
        Validator::make($request->all(), [

            'error' => 'required',
            'other' => 'required',
        ])->validate();
        $data = $request->all();
        $error = $this->error::create($request->all());
    
        return redirect()->route('error.index')->withMessage('Data added');
    }
    public function calculatorGet(Request $request)
    {
       // return $request->all();
       $request['error'] = Error::where('other',$request['baseloads'])->value('error');
        $request['deviceType'] = Baseload::where('id',$request['baseloads'])->value('deviceType');
        $request['device'] = Baseload::where('id',$request['baseloads'])->value('device');
        $request['baseload'] = Baseload::where('id',$request['baseloads'])->value('baseload');

        Validator::make($request->all(), [

            'department' => 'required',
            'employee_no' => 'required',

        ])->validate();
        $request['uniterror'] = $request['error'];
        $request['error'] = $request['error'] * $request['employee_no'];
        $request['baseload'] = $request['baseload'] * $request['employee_no'];
        $data = $request->all();  
 $kwh = (($request['baseload'] + ($request['usage'] * $request['hour']) ) * $request['employee_no'])+ $request['error'];
 $perkwh = ($request['baseload'] + ($request['usage'] * $request['hour']) ) + $request['error'];

 return view('calculator.result',compact('data','kwh','perkwh'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
