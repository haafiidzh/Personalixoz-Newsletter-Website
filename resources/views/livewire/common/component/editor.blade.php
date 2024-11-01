@push('styles')
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/test.min.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-lite.css') }}">
@endpush

<div>
    <textarea id="summernote" type="textarea" name="content" placeholder="Masukkan isi berita di sini" wire:model="content">
    </textarea>
</div>

@push('scripts')
    <script src="{{ asset('assets/js/summernote-bs5.js') }}"></script>
    <script src="{{ asset('assets/js/summernote-lite.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#summernote').summernote(
                tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
            );
           
        });
    </script>
@endpush
