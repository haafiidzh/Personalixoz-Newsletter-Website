<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end gap-1 items-center">
                        <i class="fas fa-search text-sm p-1"></i>
                        <input placeholder="Cari Berita..." id="search" type="text" class="text-sm p-1 rounded"
                        wire:model.lazy="search">
                </div>
            </div>
            <table class="w-full rounded-xl shadow-md">
                <thead class="bg-gray-300 rounded-t-md text-sm">
                    <th class="px-4 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Judul</th>
                    <th class="px-4 py-2 text-left">Gambar</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">Dihapus</th>
                    <th class="px-4 py-2 text-center">Opsi</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($news->count() > 0)
                        @foreach ($news as $index => $item)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-gray-200">
                                <td class="px-1 py-1 text-center">{{ $news->firstItem() + $index }}</td>
                                <td class="px-4 py-1 text-left">{{ $item->title }}</td>
                                <td class="px-4 py-1 text-left">
                                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                        class="w-20 h-20 object-contain">
                                </td>
                                <td class="px-4 py-1 text-left">{{ $item->category->name }}</td>
                                <td class="px-4 py-1 text-left">{{ $item->author->name }}</td>
                                <td class="px-4 py-1 text-left">{{ $item->deleted_at->format('H.i, d M Y') }}</td>
                                <td class="px-4 py-1">
                                    <div class="flex gap-2 justify-center">
                                        @can('restore-news')
                                            <a onclick="confirmRestore({{ $item->id }})"
                                                class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-upload text-xs"></i></a>
                                        @endcan
                                        @can('delete-news')
                                            <a onclick="confirmDelete({{ $item->id }})"
                                                class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-trash text-xs"></i>
                                            </a>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="text-center py-3">
                                {{ $search ? 'Data yang kamu cari tidak kami temukan' : 'Data Kosong' }}
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="my-5">
            {{ $news->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmRestore(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Anda yakin ingin memulihkan berita ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Pulihkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('restore', id)
                }
            })
        };

        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Data tidak dapat dikembalikan setelah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('delete', id)
                }
            })
        };
    </script>
@endpush