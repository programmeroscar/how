<x-section breadcrumbTitle="Feedback">
    <div class="d-flex justify-content-between bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <h2>Feedback</h2>
        </div>
        <div class="p-2 bd-highlight">
            <a href="{{ route('feedback.create') }}" class="btn btn-outline-primary btn-sm">Submit New</a>
        </div>
    </div>
    <div class="table-responsive mb-0">
        <table class="table card-table table-nowrap overflow-hidden">
            <thead>
                <tr>
                    <th>Feature title</th>
                    <th>Date opened</th>
                    <th>Opened by</th>
                    <th>Status</th>
                    <th>Date completed</th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($feedback as $feature)
                <tr>
                    <td><a href="{{ route('feedback.edit', $feature->id) }}">{{ ucfirst($feature->title) }}</a></td>
                    <td>{{ ($feature->created_at)->diffForHumans() }}</td>
                    <td>{{ $feature->user_id }}</td>
                    <td>{{ $feature->completed }}</td>
                    <td>{{ ($feature->updated_at)->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-section>