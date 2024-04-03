<x-section breadcrumbTitle="User Activity">
    <h2 class="mx-4 my-4">User Activity</h2>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap">
            <thead>
                <tr>
                    <th>User</th>
                    <th>IP</th>
                    <th>URL</th>
                    <th>Auditable</th>
                    <th>Event</th>
                    <th>User Agent</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($activity as $event)
                <tr>
                    <td>{{ $event->user->name ?? '' }}</td>
                    <td>{{ $event->ip_address }}</td>
                    <td>{{ $event->url }}</td>
                    <td>@if ( $event->event ==='created')
                        <span class="badge badge-sm badge-success">Created</span>
                        @elseif ( $event->event ==='updated')
                        <span class="badge badge-sm badge-info">Updated</span>
                        @else
                        <span class="badge badge-sm badge-danger">Deleted</span>
                        @endif</td>
                    <td>{{ $event->auditable_type }}</td>
                    <td>
                        <p class="text-wrap" style="width:20rem">{{ $event->user_agent }}</p>
                    </td>
                    <td>{{ ($event->created_at)->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>