<div>
    <div class="w-full h-screen flex items-center">
        <div class="w-80 px-10 py-7 mx-auto rounded-xl shadow-xl flex flex-col bg-slate-100">
            <div class="mb-5 flex justify-center text-xl font-semibold">
                Login Admin
            </div>

            <form wire:submit="login">
                <div class="mb-5">
                    <label for="userEmail" class="block font-semibold text-sm text-slate-700">Email</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text"
                        wire:model="userEmail" 
                        placeholder="Alamat Email"
                        id="userEmail">
                    @error('userEmail')
                        <div class="mx-3 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="userPassword" class="block font-semibold text-sm text-slate-700">Password</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="{{ $showPassword ? 'text' : 'password' }}" 
                        wire:model="userPassword"
                        placeholder="Password"
                        id="userPassword">
                    <div class="absolute -mt-9 ml-52 cursor-pointer" wire:click="togglePasswordVisibility">
                        <i class="{{ $showPassword ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye' }}"></i>
                    </div>
                    @error('userPassword')
                        <div class="mx-3 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>

                @if ($loginError)
                    <div class="mx-3 mt-2 font-semibold text-sm text-red-700 ">{{ $loginError }}</div>
                @endif

                <button type="submit"
                    class="w-full h-10 mt-5 rounded-xl border bg-transparent text-md font-semibold text-slate-700 border-slate-700 hover:bg-slate-300 hover:text-slate-950 hover:border-transparent active:bg-slate-400 transition-all duration-150 s">
                    Masuk <span wire:loading wire:target="login"><i class="fa-solid fa-circle-notch fa-spin"></i></span>
                </button>
            </form>

        </div>
    </div>
</div>
