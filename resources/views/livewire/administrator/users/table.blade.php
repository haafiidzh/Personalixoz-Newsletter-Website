<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="w-full">
        <div class="w-full bg-slate-100 rounded-xl shadow-md">
            <div class="p-2">
                <div class="p-1 flex justify-end items-center gap-2">
                    <i class="fas fa-search text-sm"></i>
                    <input placeholder="Cari Pengguna..." id="search" type="text" class="text-sm p-1 rounded-md"
                        wire:model.lazy="search">
                </div>
            </div>
            <table class="w-full">
                <thead class="bg-gray-300 rounded-t-md ">
                    <th class="px-1 py-2 text-center">No.</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Role</th>
                    <th class="px-4 py-2 text-left">Verified</th>
                    <th class="px-4 py-2 text-left">Dibuat Pada</th>
                    <th class="px-4 py-2 text-center">Opsi</th>
                </thead>
                <tbody class="text-sm">
                    @php
                        $i = 1;
                    @endphp
                    @if ($users->count() > 0)
                        @foreach ($users as $index => $user)
                            {{-- tanpa pagination --}}
                            {{-- <td>{{ $i++ }}</td>  --}}

                            {{-- pakai pagination --}}
                            <tr class="hover:bg-white">
                                <td class="px-1 py-2 text-center">{{ $users->firstItem() + $index }}</td>
                                <td class="px-4 py-2 text-left">{{ $user->name }}</td>
                                <td class="px-4 py-2 text-left">{{ $user->email }}</td>

                                {{-- cara lain ambil role --}}
                                {{-- <td class="px-4 py-2 text-left">{{ $user->getRoleNames()->implode('') }}</td> --}}
                                {{-- <td class="px-4 py-2 text-left">{{ $user->roles->pluck('name')->first() }}</td> --}}
                                
                                <td class="px-4 py-2 text-left">{{ $user->roles->first()->name }}</td>
                                <td class="px-4 py-2 text-left">
                                    @if ($user->email_verified_at == !null)
                                        <span class="text-green-600 font-medium">
                                            <i class="fa-solid fa-circle-check"></i> Verified
                                        </span>
                                    @elseif ($user->email_verified_at == null)
                                        <span class="text-yellow-600 font-medium">
                                            <i class="fa-solid fa-circle-info"></i> Pending
                                        </span>
                                    @endif
                                </td>
                                <td class="px-4 py-2 text-left">{{ $user->created_at->format('H.i , d M Y') }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex gap-2 justify-center">
                                        @can('detail-users')
                                            <a href="{{ route('administrator.users.detail', ['id' => $user->id]) }}"
                                                class="py-[0.15rem] px-[0.37rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye text-xs "></i></a>
                                        @endcan
                                        @can('edit-users')
                                            <a href="{{ route('administrator.users.edit', ['id' => $user->id]) }}"
                                                class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-eye-dropper text-xs"></i></a>
                                        @endcan
                                        @can('delete-users')
                                            <a onclick="confirmDelete({{ $user->id }})"
                                                class="cursor-pointer py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                                    class="fa-solid fa-trash text-xs"></i></a>
                                        @endcan
                                    </div>
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
        <div class="my-5">
            {{ $users->links('vendor.pagination.custom') }}
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
