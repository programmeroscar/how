<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserProfileController extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        if ($user->isProfileOwner()) {
            return view('profile.edit', compact('user'));
        }
        return redirect('dashboard');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $this->doValidation($request, $user);
        $user->update($data);
        $request->session()->flash('success', 'Profile updated successfully.');
        return redirect()->back();
    }

    public function activity()
    {

        $activity = \OwenIt\Auditing\Models\Audit
            ::orderBy('created_at', 'desc')
            ->where('user_id', Auth::user()->id)
            ->limit(7)
            ->get();
        return view('profile.activity', compact('activity'));
    }

    public function security()
    {
        return view('profile.security');
    }

    public function doValidation($request, $user)
    {
        return $request->validate(
            [
                'name' =>  [($user->id) ? "sometimes" : "required", "string"],
                'email' =>  [($user->id) ? "sometimes" : "required", Rule::unique('users', 'email')->ignore($user->id)],
                'department' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'title' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'employee_no' =>  [($user->id) ? "sometimes" : "string", "nullable"],
                'title' =>  [($user->id) ? "sometimes" :  "string", "nullable"],
                'location' =>  [($user->id) ? "sometimes" : "string", "nullable", Rule::in(['Accra', 'Takoradi', 'Tema'])],
            ],
        );
    }
}
