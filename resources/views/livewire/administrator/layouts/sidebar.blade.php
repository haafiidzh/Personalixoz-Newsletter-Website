<nav :class="isOpen ? 'w-52' : 'w-20'" class="fixed flex-shrink-0 transition-all duration-300 h-full bg-white">
    <div class="flex flex-col justify-between h-screen bg-slate-200 shadow-xl">
        <div class="px-4 py-6">

            <a href="{{ route('home') }}" target="_blank" class="-mx-2 p-2 flex justify-center"
                :class="!isOpen ? 'w-16 transition-all duration-300' : 'w-48 transition-all duration-300'">
                <img :src="!isOpen ? '{{ asset('assets/img/logo-kecil.png') }}' : '{{ asset('assets/img/logo.png') }}'" class="h-10 object-contain" alt="">
            </a>

            <ul class="mt-5 space-y-1">
                {{-- general --}}
                @foreach ($menu as $item)
                    @if ($item['is_separator'])
                        @canany($item['permission'], 'web')
                            <li>
                                <div :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'" class="text-xs text-gray-500 font-medium pl-4 my-2">
                                    {{ $item['name'] }}</div>
                            </li>
                            
                        @endcanany
                    @else
                        @canany($item['permission'], 'web')
                            @if (empty($item['childs']))
                                <li>
                                    <a wire:navigate href="{{ $item['route'] }}"
                                        class="{{ $item['active'] ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} block rounded-lg px-4 py-2 text-md font-medium hover:bg-gray-100 hover:text-gray-700 hover:transition-all hover:duration-200">
                                        <div class="flex gap-3 items-center">
                                            <i class="{{ $item['icon'] }}"></i>
                                            <span
                                                :class="!isOpen ? 'hidden transition-all duration-300' :
                                                    'transition-all duration-300'">{{ $item['name'] }}</span>
                                        </div>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                                        <summary
                                            class="{{ $item['active'] ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} flex cursor-pointer justify-between items-center rounded-lg px-4 py-2 text-md font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 hover:transition-all hover:duration-200">
                                            <div class="flex gap-3 items-center">
                                                <i class="{{ $item['icon'] }}"></i>
                                                <span
                                                    :class="!isOpen ? 'hidden transition-all duration-300' :
                                                        'transition-all duration-300'">{{ $item['name'] }}</span>
                                            </div>

                                            {{-- Arrow Buka Menu --}}
                                            <span
                                                :class="!isOpen ? 'hidden transition-all duration-300' :
                                                    'transition-all duration-300'"
                                                class="shrink-0 transition-all duration-300 group-open:-rotate-180">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </summary>

                                        <ul class="mt-1 py-1 space-y-0.5 bg-slate-300 rounded-md"
                                            :class="!isOpen ? 'px-2' : 'px-3'">
                                            @foreach ($item['childs'] as $child)
                                                <li class="">
                                                    <a wire:navigate href="{{ $child['route'] }}"
                                                        class="{{ $child['active'] ? 'bg-gray-100 text-gray-700' : 'text-gray-500' }} block rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700 hover:transition-all hover:duration-200">
                                                        <i class="{{ $child['icon'] }} pr-2"></i>
                                                        <span
                                                            :class="!isOpen ? 'hidden transition-all duration-300' :
                                                                'transition-all duration-300'">{{ $child['name'] }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </details>

                                </li>
                            @endif
                        @endcanany
                    @endif
                @endforeach

                {{-- <li>
                    <a href="/administrator"
                        class="{{ request()->is('administrator') ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} block rounded-lg px-4 py-2 text-md font-medium hover:bg-gray-100 hover:text-gray-700">
                        <i class="fa-solid fa-house"></i> <span :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'"> &nbsp;Dashboard</span>
                    </a>
                </li>

                <li>
                    <div :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'" class="text-xs text-gray-500 font-medium pl-4"> App Management
                    </div>
                </li>

                <li>
                    <a href="/news"
                        class="{{ request()->is('news', 'news/*') ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} block rounded-lg px-4 py-2 text-md font-medium hover:bg-gray-100 hover:text-gray-700">
                        <i class="fa-solid fa-newspaper"></i> <span :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'">
                            &nbsp;Berita</span>
                    </a>
                </li>


                <li>
                    <div :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'" class="text-xs text-gray-500 font-medium pl-4"> Account
                        Management </div>
                </li>

                <li>
                    <a href="/administrator/users"
                        class="{{ request()->is('administrator/users', 'administrator/users/*') ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} block rounded-lg px-4 py-2 text-md font-medium hover:bg-gray-100 hover:text-gray-700">
                        <i class="fa-solid fa-users"></i> <span :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'"> &nbsp;User</span>
                    </a>
                </li>

                <li>
                    <a href="/administrator/roles"
                        class="{{ request()->is('administrator/roles', 'administrator/roles/*') ? 'bg-gray-100 px-4 py-2 text-gray-700' : 'text-gray-500' }} block rounded-lg px-4 py-2 text-md font-medium  hover:bg-gray-100 hover:text-gray-700">
                        <i class="fa-solid fa-shield"></i><span :class="!isOpen ? 'hidden transition-all duration-300' : 'transition-all duration-300'"> &nbsp;Role</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> Teams </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Banned Users
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Calendar
                                </a>
                            </li>
                        </ul>
                    </details>
                </li> --}}

                {{-- <li>
                    <details class="group [&_summary::-webkit-details-marker]:hidden">
                        <summary
                            class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                            <span class="text-sm font-medium"> Account </span>

                            <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                        </summary>

                        <ul class="mt-2 space-y-1 px-4">
                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Details
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    Security
                                </a>
                            </li>

                            <li>
                                <form action="#">
                                    <button type="submit"
                                        class="w-full rounded-lg px-4 py-2 text-sm font-medium text-gray-500 [text-align:_inherit] hover:bg-gray-100 hover:text-gray-700">
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </details>
                </li> --}}
            </ul>
        </div>


        {{-- <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
            <div class=" w-14">
                <a href="/logout"
                    class="h-14 w-20 flex items-center justify-center rounded-lg text-sm font-medium hover:px-4 py-2 hover:bg-gray-100 hover:text-gray-700">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
        </div> --}}



        {{-- template --}}
        {{-- <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
            <a href="#" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
                <img alt=""
                    src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                    class="size-10 rounded-full object-cover" />

                <div>
                    <p class="text-xs">
                        <strong class="block font-medium">Eric Frusciante</strong>

                        <span> eric@frusciante.com </span>
                    </p>
                </div>
            </a>
        </div> --}}
    </div>
</nav>

