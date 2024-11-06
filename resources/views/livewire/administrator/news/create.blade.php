@push('styles')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />
@endpush

<div>
    <form wire:submit.prevent="store">

        <div class="w-full">

            {{-- Kategori --}}
            <div class="mb-5 flex gap-2">

                {{-- Form Kategori --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="category_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Kategori</label>
                        <select
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            name="category_id" wire:model="category_id">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Deskripsi Kategori --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-layer-group p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Utama</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellat, assumenda?</p>
                    </div>
                </div>
            </div>

            {{-- Utama --}}
            <div class="mb-5 flex gap-2">

                {{-- Form Data --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="title" class="block ml-1 font-semibold text-sm text-slate-700 ">Judul</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="title" placeholder="Judul Berita" wire:model.lazy="title">
                        @error('title')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="slug" class="block ml-1 font-semibold text-sm text-slate-700 ">Slug</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="slug" placeholder="Slug (otomatis)" wire:model="slug" disabled>
                        @error('slug')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="content" class="block ml-1 font-semibold text-sm text-slate-700 ">Konten</label>

                        <div class="relative" wire:ignore>
                            <textarea id="editor" wire:model.defer="content" cols="30" rows="10" class="absolute" placeholder="Masukkan isi berita di sini">
                            </textarea>
                        </div>
                        @error('content')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror

                    </div>

                </div>



                {{-- Deskripsi Utama --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-layer-group p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Utama</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellat, assumenda?</p>
                    </div>
                </div>
            </div>

            <div class="mb-5 flex gap-2">

                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <label class="block ml-1 mb-1 font-semibold text-sm text-slate-700 ">Gambar</label>
                    <div class="mb-1 flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="dropzone flex flex-col items-center justify-center w-full h-25 border-2 border-gray-300 border-dashed rounded-3xl cursor-pointer bg-gray-50 hover:bg-gray-100">
                            <input id="dropzone-file" type="file" class="sr-only" wire:model="image" accept="image/*"
                                onchange="previewImage(event)" />
                            <div wire:ignore id="image-preview-container" class="">
                                <div class="w-full pt-5 pb-6 flex flex-col items-center justify-center ">
                                    <i class="fa-solid fa-cloud-arrow-up py-2 text-gray-500 text-xl"></i>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                        800x400px)</p>
                                </div>

                                <img id="preview-image" src="" alt="Image Preview"
                                    class="hidden rounded-3xl blur-md h-24 object-contain" />
                            </div>
                        </label>
                    </div>
                    @error('image')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Deskripsi Gambar --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-layer-group p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Utama</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellat, assumenda?</p>
                    </div>
                </div>
            </div>
            <div class="mb-5 flex gap-2">

                {{-- Form Penulis --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white flex justify-between gap-5">
                    <div class="mb-2 flex flex-col flex-grow">
                        <label for="author_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Penulis</label>
                        <input class=" mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-black"
                            type="text" name="author_id" placeholder="{{ Auth::user()->name }}"
                            wire:model="author_id" readonly>
                        @error('author_id')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="is_published"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">Publish</label>
                        <label class="mt-2 relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" wire:model="is_published">
                            <div
                                class="w-9 h-5 bg-gray-400 hover:bg-gray-500 peer-focus:outline-0 peer-focus:ring-transparent rounded-full peer transition-all ease-in-out duration-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-indigo-800 hover:peer-checked:bg-indigo-900">
                            </div>
                        </label>
                    </div>
                </div>

                {{-- Deskripsi Utama --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-layer-group p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Utama</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellat, assumenda?</p>
                    </div>
                </div>
            </div>

            {{-- Button Simpan --}}
            <div class="pb-10 w-3/4 flex justify-center">
                <button type="submit"
                    class="w-1/3 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="store">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>

                    <span wire:loading wire:target="store">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i>
                    </span>
            </div>

        </div>
    </form>
</div>

@push('scripts')

    {{-- Script untuk import ckeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.umd.js"></script>
    <script>
        const {
            ClassicEditor,
            Essentials,
            Heading,
            Indent,
            IndentBlock,
            Bold,
            Italic,
            Underline,
            Font,
            Paragraph,
            Alignment,
            BlockQuote
        } = CKEDITOR;

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Heading, Indent, IndentBlock, Bold, Italic, Underline, Font, Paragraph, Alignment,
                    BlockQuote
                ],
                toolbar: [
                    'undo', 'redo', '|', 'heading', '|', 'outdent', 'indent', '|', 'bold', 'italic', 'underline',
                    '|', 'alignment', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|', 'blockQuote'
                ],
                indentBlock: {
                    offset: 2,
                    unit: 'em'
                }
            })
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    const data = editor.getData();
                    @this.set('content', data); // Update Livewire property 'content'
                });
            })
            .catch( /* ... */ );
    </script>

    {{-- Script untuk drag n drop image --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropzone = document.querySelector('.dropzone'); // Menggunakan class .dropzone
            const fileInput = document.getElementById('dropzone-file');
            const imagePreview = document.getElementById('image-preview');

            dropzone.addEventListener('dragover', function(e) {
                e.preventDefault();
                dropzone.classList.add('border-indigo-600'); // Tambah efek border saat drag
            });

            dropzone.addEventListener('dragleave', function(e) {
                e.preventDefault();
                dropzone.classList.remove('border-indigo-600'); // Hilangkan efek border saat drag leave
            });

            dropzone.addEventListener('drop', function(e) {
                e.preventDefault();
                dropzone.classList.remove('border-indigo-600'); // Hilangkan efek border saat drop
                const files = e.dataTransfer.files;
                fileInput.files = files; // Set file input dengan file yang di-drop
                fileInput.dispatchEvent(new Event('change', {
                    'bubbles': true
                })); // Trigger event change
                previewImage(files[0]); // Preview gambar setelah file di-drop
            });

            dropzone.addEventListener('click', function() {
                fileInput.click(); // Buka file explorer saat klik dropzone
            });

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    previewImage(file); // Preview gambar saat file di-upload
                }
            });

            function previewImage(file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result; // Set src dari image preview
                    imagePreview.classList.remove('hidden'); // Tampilkan image preview
                };
                reader.readAsDataURL(file); // Baca file gambar
            }
        });

        function previewImage(event) {
            const input = event.target;
            const container = document.getElementById('image-preview-container');
            const preview = document.getElementById('preview-image');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Ganti konten div dengan gambar baru
                    container.innerHTML =
                        `<img src="${e.target.result}" alt="Image Preview" class="rounded-3xl" />`;
                }
                reader.readAsDataURL(file);
            } else {
                // Jika tidak ada file, kembalikan konten div awal
                container.innerHTML = `
                <div class="w-full pt-5 pb-6 flex flex-col items-center justify-center ">
                    <i class="fa-solid fa-cloud-arrow-up py-2 text-gray-500 text-xl"></i>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                            class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                        800x400px)</p>
                </div>
            `;
            }
        }
    </script>
@endpush
