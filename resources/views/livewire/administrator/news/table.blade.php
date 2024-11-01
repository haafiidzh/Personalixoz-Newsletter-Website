<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-between ">
                    <a href="{{ route('administrator.news.archive') }}">
                        <div
                            class="px-3 py-1 bg-white flex gap-2 items-center text-sm rounded-md shadow-sm hover:bg-slate-200 transition-all active:bg-slate-400">
                            <i class="fas fa-archive fa-sm"></i>
                            <span class="font-semibold tracking-wider"> Archive</span>
                        </div>
                    </a>
                    <div class="flex gap-2 items-center">
                        <i class="fas fa-search text-sm"></i>
                        <input placeholder="Cari Berita..." id="search" type="text" class="text-sm p-1 rounded"
                            wire:model.lazy="search">
                    </div>
                </div>
            </div>
            <table class="w-full rounded-xl shadow-md">
                <thead class="bg-gray-300 rounded-t-md text-sm">
                    <th class="px-4 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Judul</th>
                    <th class="px-4 py-2 text-left">Gambar</th>
                    <th class="px-4 py-2 text-left">Kategori</th>
                    <th class="px-4 py-2 text-left">Author</th>
                    <th class="px-4 py-2 text-left">Published</th>
                    <th class="px-4 py-2 text-left">Dibuat</th>
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
                                <td class="p-1 text-left">{{ $item->title }}</td>
                                <td class="p-1 text-left">
                                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                        class="w-20 h-20 object-contain">
                                </td>
                                <td class="px-4 py-1 text-left">{{ $item->category->name }}</td>
                                <td class="px-4 py-1 text-left">{{ $item->author->name }}</td>
                                <td class="px-4 py-1 text-left">
                                    @if ($item->is_published == true)
                                        <span onclick="confirmPublish({{ $item->id }})"
                                            class="text-green-700 cursor-pointer font-medium">
                                            <i class="fa-solid fa-circle-check"></i> Ya
                                        </span>
                                    @elseif ($item->is_published == false)
                                        <span onclick="confirmPublish({{ $item->id }})"
                                            class="text-red-700 cursor-pointer font-medium">
                                            <i class="fa-solid fa-circle-xmark"></i> Tidak
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-1 text-left">{{ $item->created_at->format('H.i, d M Y') }}</td>
                                <td class="px-4 py-1">
                                    <div class="flex gap-2 justify-center">
                                        @can('detail-news')
                                            <a href="{{ route('administrator.news.detail', ['id' => $item->id]) }}"
                                                class="py-1 px-[0.37rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye text-xs "></i></a>
                                        @endcan
                                        @can('edit-news')
                                            <a href="{{ route('administrator.news.edit', ['id' => $item->id]) }}"
                                                class="py-1 px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @canany(['archive-news', 'delete-pews'])
                                            <div x-data="{ open: false }">
                                                <div @click="open = !open"
                                                    class="py-1 cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400">
                                                    <i class="fa-solid fa-trash text-xs"></i>
                                                </div>
                                                <div x-show="open" @click.away="open = false"
                                                    class="absolute mt-2 bg-white rounded-md shadow-xl text-sm font-semibold">
                                                    @can('archive-news')
                                                        <a onclick="confirmArchive({{ $item->id }})"
                                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200 cursor-pointer">Arsipkan</a>
                                                    @endcan

                                                    @can('delete-news')
                                                        <a onclick="confirmDelete({{ $item->id }})"
                                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-200 cursor-pointer">Hapus</a>
                                                    @endcan

                                                </div>
                                            </div>
                                        @endcanany
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
        function confirmPublish(id) {
            Swal.fire({
                text: "Anda yakin ingin mengubah status berita ini?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Gas',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('togglePublished', id);
                }
            })
        };

        function confirmArchive(id) {
            Swal.fire({
                title: 'Yakin Bos?',
                text: "Anda yakin ingin mengarsipkan berita ini?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Arsipkan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone; // Mendapatkan zona waktu pengguna
                    @this.call('archive', id, timezone); // Memanggil metode 'archive' dengan id dan zona waktu
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
