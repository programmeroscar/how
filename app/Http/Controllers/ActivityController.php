<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function userActivity(User $user)
    {
        $activity = \OwenIt\Auditing\Models\Audit::with('user')->get();
        return view('activity.user-activity', compact('user', 'activity'));
    }
}
