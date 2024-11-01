<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>
    
    <div class="w-1/2">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end items-center gap-2">
                    <i class="fas fa-search text-sm"></i>
                    <input placeholder="Cari Permission..." id="search" type="text" class="text-sm p-1 rounded-md"
                        wire:model.lazy="search">
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 rounded-t-md">
                    <th class="px-1 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Nama Permission</th>
                    <th class="px-4 py-2 text-center">Guard</th>
                    <th class="px-4 py-2 text-center">Opsi</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($permissions->count() > 0)
                        @foreach ($permissions as $index => $permission)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-gray-200">
                                <td class="px-1 py-2 text-center">{{ $permissions->firstItem() + $index }}</td>
                                <td class="px-4 py-2 text-left">{{ $permission->name }}</td>
                                <td class="px-4 py-2 text-center">{{ $permission->guard_name }}</td>
                                <td class="px-4 py-2 text-center">
                                    @can('delete-permission')
                                        <a onclick="confirmDelete({{ $permission->id }})"
                                            class="cursor-pointer px-[0.35rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                class="fa-solid fa-trash text-xs"></i>
                                        </a>
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="text-center py-3">Data yang kamu cari tidak kami temukan</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="my-3">
            {{ $permissions->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>


@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
