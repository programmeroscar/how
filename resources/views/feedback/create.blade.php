<x-section breadcrumbTitle="Share Feedback">
    <h2>Share Feedback</h2>
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <div class="row g-4 col-md-8 ">
            <div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        id="floatingInputTitle" placeholder="title" value="{{ old('title') }}">
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
                        and why the feature is needed">{{ old('comment') }}</textarea>
                    @error('comment')
                    <x-validation-error>{{ $message }}</x-validation-error>
                    @enderror
                </div>
                <small class="text-secondary"><i class="bi bi-exclamation-circle"></i> Help us improve by sharing your
                    feedback. Use the form to submit a feature request or bug report.</small>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Submit New Issue</button>
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