<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>
    
    <div class="w-1/2 bg-slate-100 rounded-xl shadow-md">
    <table class="w-full mx-auto rounded-xl shadow-md text-sm">
        <thead class="bg-gray-300 rounded-t-md">
            <th class="px-0.5 py-2 text-center">No.</th>
            <th class="px-4 py-2 text-left">Nama Kategori</th>
            <th class="px-4 py-2 text-center">Slug</th>
            <th class="px-4 py-2 text-center">Opsi</th>
        </thead>
        <tbody class=" ">
            @php
                $i = 1;
            @endphp
            @foreach ($categorys as $category)
                <tr class=" hover:bg-gray-200">
                    <td class="px-4 py-2 text-center">{{ $i++ }}</td>
                    <td class="px-4 py-2 text-left">{{ $category->name }}</td>
                    <td class="px-4 py-2 text-center">{{ $category->slug }}</td>
                    <td class="px-4 py-2 text-center flex justify-center items-center gap-2">
                        {{-- <a href="{{ route('edit-role', ['id'=> $role->id]) }}" 
                            class="px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i class="fa-solid fa-eye-dropper text-xs"></i></a> --}}
                        @can('delete-news-category')
                            <a onclick="confirmDelete({{ $category->id }})"
                                class="cursor-pointer px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"><i
                                    class="fa-solid fa-trash text-xs"></i>
                            </a>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
