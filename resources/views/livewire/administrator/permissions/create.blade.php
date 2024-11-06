<div>
    <form wire:submit.prevent="store">

        <div class=" w-full">
            {{-- Permission --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Permission --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-layer-group p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Permission</h2>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellat, assumenda?</p>
                    </div>
                </div>

                {{-- Form Data --}}
                <div class="w-1/2 px-6 py-2 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="name" class="block ml-1 font-semibold text-sm text-slate-700 ">Nama
                            Permission</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="name" placeholder="Nama Permission" wire:model="name">
                        @error('name')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="guard_name" class="block ml-1 font-semibold text-sm text-slate-700 ">Guard</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="guard_name" placeholder="web" value="web" disabled>
                    </div>
                </div>
            </div>

            {{-- Button Simpan --}}
            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="store">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>
                
                    <span wire:loading wire:target="store">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i> 
                    </span>
                </button>
            </div>

        </div>
    </form>
</div>
