<div>
    <form wire:submit.prevent="store">

        <div class="w-full">
            {{-- Role --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Role --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-shield p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Role</h2>
                            <p class="text-lg"> &nbsp;| Peran</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Nama peran dalam sebuah sistem sesuai dengan
                            kewenangannya</p>
                    </div>
                </div>

                {{-- Form Role --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="role" class="block ml-1 font-semibold text-sm text-slate-700 ">Nama Role</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="role" placeholder="Nama Role" wire:model="role">
                        @error('role')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="guard_name" class="block ml-1 font-semibold text-sm text-slate-700 ">Guard</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="guard_name" placeholder="web" value="web" disabled>
                    </div>
                </div>
            </div>

            {{-- Permission --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Permission --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-lock p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Permission </h2>
                            <p class="text-lg"> &nbsp;| Izin</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Izin untuk peran baru yang akan ditambahkan.
                        </p>
                    </div>
                </div>

                {{-- Form Permission --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="w-full flex flex-col gap-4">
                        <div class="w-full">
                            <label for="permission" class="block ml-1 font-semibold text-sm text-slate-700 ">Pilih
                                Permission</label>

                                {{-- eror tampilan (beri gap-3 div dibawah ini untuk melihat) --}}
                            <div class="mt-2 grid grid-cols-2">
                                @foreach ($permissions as $permission)
                                    <div>
                                        <label class="mt-2 relative inline-flex items-center cursor-pointer">
                                        <input id="{{ $permission->id }}" name="permission" type="checkbox"
                                            wire:model="selectedPermissions" value="{{ $permission->id }}" type="checkbox" class="sr-only peer text-lg">
                                        <div class="w-9 h-5 bg-gray-400 hover:bg-gray-500 peer-focus:outline-0 peer-focus:ring-transparent rounded-full peer transition-all ease-in-out duration-500 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-indigo-800 hover:peer-checked:bg-indigo-900"></div>
                                        <label for="{{ $permission->id }}" class="ml-2 cursor-pointer text-sm font-medium">{{ $permission->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('selectedPermissions')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                </div>
            </div>

            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
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
