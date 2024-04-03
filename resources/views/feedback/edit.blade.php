<x-section breadcrumbTitle="Manage Feedback">
    <div class="d-flex justify-content-between bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <h2>Manage Feedback</h2>
            <p>Raised by <span class="badge bg-info text-white badge-sm">{{ $feedback->user->name ?? '' }}</span>
            </p>
        </div>
        <div class="p-2 bd-highlight">
            <a href="{{ route('feedback.index') }}" class="btn btn-link"><u>Go back</u></a>
        </div>
    </div>
    <form action="{{ route('feedback.update', $feedback->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row g-4 col-md-8 ">
            <div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="floatingInputTitle" placeholder="title" value="{{ $feedback->title }}">
                    <label for="title">Title</label>
                    @error('title')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
            <div>
                <div class="form-floating">
                    <textarea class="editor form-control @error('comment') is-invalid @enderror" name="comment"
                        id="floatingTextarea" placeholder="Description of desired feature
                        and why the feature is needed">{{ $feedback->comment }}</textarea>
                    @error('comment')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                <small class="text-secondary"><i class="bi bi-exclamation-circle"></i> Help us improve by sharing your
                    feedback. Use the form to submit a feature request or bug report.</small>
            </div>
            <div>
                <div class="form-floating">
                    <select class="form-select" name="completed" id="floatingSelectCompleted"
                        aria-label="Floating label select" required>
                        <option selected>{{ ucfirst($feedback->completed) }}</option>
                        <option>completed</option>
                        <option>rejected</option>
                    </select>
                    <label for="completed">Please select</label>
                    @error('completed')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Mark as
            Complete</button>
    </form>
</x-section>
<script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '.editor' ), {
            
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            licenseKey: '',
        });
</script>