@push('styles')
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.css" />
@endpush

<div>
    <form wire:submit.prevent="update">

        <div class="w-full">
            {{-- Kategori --}}
            <div class="mb-5 flex gap-2">

                {{-- Form Kategori --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="category" class="block ml-1 font-semibold text-sm text-slate-700 ">Kategori</label>
                        <select
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            name="category" wire:model="category">
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
                        <textarea id="editor" wire:model.defer="content" rows="10" class=" overflow-hidden">
                            {{ $news->content }}
                        </textarea>
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

                {{-- Form Penulis --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-2">
                        <label for="author_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Gambar</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-black"
                            type="file" name="image" wire:model="image">
                        <img src="{{ Storage::url($image) }}" alt="{{ $image }}"
                            class="w-20 h-20 object-contain">
                        @error('image')
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

                {{-- Form Penulis --}}
                <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white flex justify-between gap-5">
                    <div class="mb-2 flex flex-col flex-grow">
                        <label for="author_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Penulis</label>
                        <input class=" mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-black"
                            type="text" name="author_id" {{-- placeholder="{{ Auth::user()->name }}" --}} wire:model="author_id" readonly>
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
            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="update">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>

                    <span wire:loading wire:target="update">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i>
                    </span>
                </button>
            </div>

        </div>
    </form>
</div>

@push('scripts')
    {{-- Script untuk import ckeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/43.2.0/ckeditor5.umd.js"></script>
    <script>
        let editorInstance;
        const {
            ClassicEditor,
            Essentials,
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
                plugins: [Essentials, Bold, Italic, Underline, Font, Paragraph, Alignment, BlockQuote],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', 'underline', '|', 'alignment', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|', 'blockQuote'
                ],
            })
            .then(editor => {
                editorInstance = editor; // Simpan instance editor

                // Update Livewire property 'content' ketika data diubah di CKEditor
                editor.model.document.on('change:data', () => {
                    const data = editor.getData();
                    @this.set('content', data);
                });
                // editor.model.document.on('change:data', () => {
                // const data = editor.getData();
                // Livewire.emit('content', data); // Emit event ke Livewire
                // });
            })
            .catch(error => {
                console.error(error);
            });

        // Update CKEditor jika Livewire mengubah konten
        Livewire.on('contentUpdated', (newContent) => {
            if (editorInstance) {
                editorInstance.setData(newContent); // Set data CKEditor
            }
        });
    </script>
    
@endpush