<div>
    <div class=" w-full">
        {{-- Role --}}
        <div class="mb-5 flex">
            {{-- Deskripsi Role --}}
            <div class="w-1/4 flex flex-row gap-2">
                <i class="fa-solid fa-shield p-2"></i>
                <div class="w-48 flex flex-col gap-2">

                    <div class="flex flex-row">
                        <h2 class="text-lg font-semibold">Role </h2>
                        <p class="text-lg"> &nbsp;| Peran User</p>
                    </div>
                    {{-- @dd($user) --}}

                    <p class="text-sm text-slate-500 tracking-wider">Sesuaikan peran user agar akun tidak
                        disalahgunakan
                        oleh user.</p>
                </div>
            </div>

            {{-- Form Role --}}
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                <div class="mb-5">
                    <label for="role_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Role</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        name="role_id" placeholder="Nama Lengkap" value="{{ $user->roles->first()->name }}" disabled>
                        
                        
                </input>
                </div>
            </div>

        </div>

        {{-- Data --}}
        <div class="mb-5 flex">
            {{-- Deskripsi Data --}}
            <div class="w-1/4 flex flex-row gap-2">
                <i class="fa-solid fa-user p-2"></i>
                <div class="w-48 flex flex-col gap-2">

                    <div class="flex flex-row">
                        <h2 class="text-lg font-semibold">Form</h2>
                        <p class="text-lg"> &nbsp;| Data User</p>
                    </div>

                    <p class="text-sm text-slate-500 tracking-wider">Isikan data pribadi user, dan tidak perlu di
                        isi
                        jika memang tidak dibutuhkan sistem.</p>
                </div>
            </div>

            {{-- Form Data --}}
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                <div class="mb-5">
                    <label for="fullname" class="block ml-1 font-semibold text-sm text-slate-700 ">Nama
                        Lengkap</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="fullname" placeholder="Nama Lengkap" value="{{ $user->biodata->fullname }}" disabled>
                </div>
                <div class="mb-5">
                    <label for="gender" class="block ml-1 font-semibold text-sm text-slate-700 ">Jenis
                        Kelamin</label>
                    <div class="mt-2 flex gap-4 ">
                        <div class="flex gap-2">
                            <input type="radio" name="gender" {{ $user->biodata->gender == 'Laki-Laki' ? 'checked' : '' }} disabled>
                            <label for="gender" class="text-md font-medium text-slate-700">Laki-Laki</label>
                        </div>
                        <div class="flex gap-2">
                            <input type="radio" name="gender" {{ $user->biodata->gender == 'Perempuan' ? 'checked' : '' }} disabled>
                            <p class="text-md font-medium text-slate-700">Perempuan</p>
                        </div>
                    </div>
                </div>
                <div class="w-full mb-5 flex gap-4">
                    <div class="flex-grow">
                        <label for="place_birth" class="block ml-1 font-semibold text-sm text-slate-700 ">Tempat
                            Lahir</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="place_birth" placeholder="Tempat Lahir" value="{{ $user->biodata->place_birth }}" disabled>
                    </div>
                    
                    <div class="w-1/4">
                        <label for="date_birth" class="block ml-1 font-semibold text-sm text-slate-700 ">Tanggal
                            Lahir</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="date" name="date_birth" placeholder="Tanggal Lahir" value="{{ $user->biodata->date_birth }}" disabled>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="address" class="block ml-1 font-semibold text-sm text-slate-700 ">Alamat</label>
                    <textarea
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="textarea" name="address" value="" disabled>{{ $user->biodata->address }}</textarea>
                </div>
            </div>
        </div>

        {{-- Akun --}}
        <div class="mb-5 flex">
            {{-- Deskripsi Akun --}}
            <div class="w-1/4 flex flex-row gap-2">
                <i class="fa-solid fa-envelope p-2"></i>
                <div class="w-48 flex flex-col gap-2">

                    <div class="flex flex-row">
                        <h2 class="text-lg font-semibold">Account </h2>
                        <p class="text-lg"> &nbsp;| Akun User</p>
                    </div>

                    <p class="text-sm text-slate-500 tracking-wider">Akun yang akan digunakan user untuk login, dan
                        kontak dari pemegang akun.</p>
                </div>
            </div>

            {{-- Form Akun --}}
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                <div class="mb-5">
                    <label for="email" class="block ml-1 font-semibold text-sm text-slate-700 ">Email</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="email" placeholder="Email" value="{{ $user->email }}" disabled>
                </div>
                <div class="w-full mb-5 flex gap-4">
                    <div class="flex-grow">
                        <label for="name"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">Username</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="name" placeholder="Username" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="w-1/3">
                        <label for="phone" class="block ml-1 font-semibold text-sm text-slate-700 ">Nomor
                            Handphone</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="phone" placeholder="Nomor Handphone" value="{{ $user->phone }}" disabled>
                    </div>
                </div>
            </div>

        </div>

        {{-- Keamanan --}}
        <div class="mb-5 flex">
            {{-- Deskripsi Keamanan --}}
            <div class="w-1/4 flex flex-row gap-2">
                <i class="fa-solid fa-lock p-2"></i>
                <div class="w-48 flex flex-col gap-2">

                    <div class="flex flex-row">
                        <h2 class="text-lg font-semibold">Security </h2>
                        <p class="text-lg"> &nbsp;| Keamanan</p>
                    </div>

                    <p class="text-sm text-slate-500 tracking-wider">Pengaturan kata sandi yang akan digunakan
                        untuk
                        otentikasi user ketika login ke sistem.</p>
                </div>
            </div>

            {{-- Form Keamanan --}}
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                <div class="w-full mb-5 flex gap-4">
                    <div class="w-1/2">
                        <label for="password"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">Password</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="password" name="password" placeholder="Password" value="{{ $user->password }}" disabled>
                    </div>
                    {{-- <div class="w-1/2">
                        <label for="" class="block ml-1 font-semibold text-sm text-slate-700 ">Konfirmasi
                            Password</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="password" name="" placeholder="Konfirmasi Password">
                    </div> --}}
                </div>
            </div>

        </div>

        <div class="pb-5"></div>

        {{-- <div class="pb-16 w-1/2 flex justify-center">
            <button type="submit"
                class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md transition-all">Simpan
                <i class="text-xs fa-solid fa-arrow-right"></i></button>
        </div> --}}
    </div>
</div>