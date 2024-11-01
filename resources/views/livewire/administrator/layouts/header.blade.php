<div :class="isOpen ? 'ml-52' : 'ml-20'" class="flex-grow transition-all duration-300 sticky top-0 bg-white">
    <div class=" shadow-md flex justify-between ">
        <div class="pl-4 flex items-center">
            <div @click="isOpen = !isOpen"
                class="cursor-pointer h-10 w-10  flex items-center justify-center rounded-full hover:bg-slate-200 active:bg-slate-400 transition-all duration-300">
                <i class="fa-solid fa-bars fa-lg text-gray-700"></i>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div class="flex items-center">
                <div class="flex items-center">
                    <a href="#"><i class="text-2xl fa-regular fa-bell px-4 "></i></a>
                </div>
                <div class="pr-7 pl-4 my-3 flex border-l-2">
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 mr-1 text-3xl font-medium flex items-center justify-center rounded-full shadow-sm bg-gray-300">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}{{ count(explode(' ', Auth::user()->name)) > 1 ? strtoupper(substr(last(explode(' ', Auth::user()->name)), 0, 1)) : '' }}
                        </div>
                    </div>
                    <div @click="open = !open"
                        class="relative cursor-pointer px-3 py-2 flex flex-col rounded-xl hover:bg-gray-200 hover:shadow-md transition-all duration-200 hover:scale-100">
                        <div class="text-md text-center border-b-2 font-semibold text-slate-800 border-gray-700">
                            {{ Auth::user()->name }}
                        </div>
                        <span class="ml-auto text-sm font-semibold  text-slate-600">
                            {{ Auth::user()->roles->first()->name }}
                        </span>
                        <div x-show="open" @click.away="open = false">
                            <div class="absolute p-3 bg-white mt-6 rounded-md flex-col text-sm shadow-md">
                                <div class="rounded-t px-4 py-3 flex gap-2 items-center hover:bg-gray-200 transition-all active:bg-gray-400">
                                    <a href="{{ route('administrator.profile') }}" >
                                        <i class="fa-solid fa-user"></i>
                                        <span>
                                            Profile
                                        </span>
                                    </a>
                                </div>
                                
                                <hr>
                                <div class="px-4 py-3 flex gap-2 items-center hover:bg-gray-200 transition-all active:bg-gray-400">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>
                                        Setting
                                    </span>
                                </div>
                                <hr>
                                <div onclick="confirmLogout()" class="px-4 py-3 flex gap-2 items-center hover:bg-gray-200 transition-all active:bg-gray-400">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <span>
                                        Log Out
                                    </span>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            

        </div>
    </div>

</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmLogout(id) {
            Swal.fire({
                title: 'Logout',
                text: "Anda yakin ingin keluar?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Keluar',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('logout', id); // Memanggil metode 'archive' dengan id dan zona waktu
                }
            })
        };
    </script>
@endpush