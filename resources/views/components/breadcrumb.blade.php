<nav class="w-full flex justify-center">

    <div class="px-4 py-2 bg-gray-100 rounded-lg flex justify-center">
        <a wire:navigate href="{{ route('administrator.dashboard') }}" class="flex items-center text-blue-500 hover:text-blue-700 transition-all duration-300"><i class="fa-solid fa-home fa-xs"></i></a>
        <span class="mx-2 font-extrabold">&middot;</span>
        @foreach ($items as $item)
            @if ($loop->last)
                    <span class="font-semibold ">
                        {{ $item['title'] }}
                    </span>
            @else
                    <a href="{{ route($item['route']) }}" class="font-semibold text-blue-500 hover:text-blue-700 transition-all duration-300">
                        {{ $item['title'] }}
                    </a>
                    @if (!$loop->last)
                        <span class="mx-2 font-extrabold">&middot;</span>
                    @endif
            @endif
        @endforeach
    </div>
</nav>
