<x-section breadcrumbTitle="Users">
    <h2>Users</h2>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap overflow-hidden">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Reset Password</th>
                    <th>Active</th>
                    <th>2FA</th>
                    <th>Last Login</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($users as $user)
                <tr>
                    <td><a href="{{ route('users.edit',$user->id) }}"><u>{{ $user->name }}</u></a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ ($user->roles) }}

                    <td>@if ($user->forcePasswordChange())
                        <span class="badge rounded-pill badge-sm badge-success">No</span>
                        @else
                        <span class="badge rounded-pill badge-sm badge-danger">Yes</span>
                        @endif
                    </td>
                    </td>
                    <td>@if ($user->disableLogin())
                        <span class="badge rounded-pill badge-sm badge-success">Yes</span>
                        @else
                        <span class="badge rounded-pill badge-sm badge-danger">Disabled</span> @endif
                    </td>

                    <td>@if ($user->twoFactor())
                        <span class="badge rounded-pill badge-sm badge-danger">Disabled</span>
                        @else
                        <span class="badge rounded-pill badge-sm badge-success">Enabled</span>
                        @endif
                    </td>
                    <td> @if ($user->lastLogin())
                        @else
                        {{ Auth::user()->last_login_at->diffForHumans() }}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>
