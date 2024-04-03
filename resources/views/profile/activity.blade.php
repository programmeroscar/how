<x-section breadcrumbTitle="Recent Activity">
    <h2>Recent Activity</h2>
    <p>A history of security-related activity on your account. Logging in or out,
        changing your password.</p>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap">
            <thead>
                <tr>
                    <th>IP</th>
                    <th>URL</th>
                    <th>Action</th>
                    <th>Browser</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($activity as $event)
                <tr>
                    <td>{{ $event->ip_address }}</td>
                    <td>{{ $event->url }}</td>
                    <td><span class="badge rounded-pill badge-sm badge-secondary">{{ ucfirst($event->event) }}</span>
                    </td>
                    <td>
                        <p class="text-wrap" style="width:20rem">{{ $event->user_agent }}</p>
                    </td>
                    <td>{{ ($event->created_at)->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-section>