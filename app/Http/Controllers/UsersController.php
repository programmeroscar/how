<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Fortify\Rules\Password;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin.access');
    }

    public function index()
    {
        $users = user::with('roles')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $data = $this->doValidation($request, $user);
        //  return $data;
        $user->fill($data);
        $user->save();
        $user->roles()->sync($request->roles);
        $request->session()->flash('success', 'User created successfully.');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.edit', compact(['user', 'roles']));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->doValidation($request, $user);
        $user->update($data);
        $user->roles()->sync($request->roles);
        $request->session()->flash('success', 'User updated successfully.');
        return back();
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'User deleted successfully.');
        return redirect()->route('users.index');
    }

    public function doValidation($request, $user)
    {
        return $request->validate(
            [
                'name' =>  [($user->id) ? "sometimes" : "required", "string"],
                'email' =>  [($user->id) ? "sometimes" : "required", Rule::unique('users', 'email')->ignore($user->id)],
                'password' =>  [($user->id) ? "sometimes" : "required", new Password(), "confirmed"],
                'department' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'title' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'employee_no' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'disable_login' =>  [($user->id) ? "sometimes" :  "boolean", "nullable"],
                'force_password_change' =>  [($user->id) ? "sometimes" : "boolean", "nullable"],
                'location' =>  [($user->id) ? "sometimes" : "string", "nullable", Rule::in(['Accra', 'Takoradi', 'Tema'])],
            ],
        );
    }
}
