<div>
    @php
        $flashMessage = session('flash_message');
    @endphp

    @if ($flashMessage)

        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 3000)" 
            x-show="show"
            >
            <div id="alert-3"
                class="flex items-center p-4 mb-4 
            {{ $flashMessage['type'] == 'created' ? 'bg-green-400' : ($flashMessage['type'] == 'updated' ? 'bg-yellow-400' : 'bg-red-400') }}
            text-gray-100 rounded-lg"
                role="alert">
                <span class="sr-only">Info</span>
                <i class="fas fa-circle-info"></i>
                <div class="ms-3 text-sm font-medium">
                    {{ $flashMessage['message'] }}
                </div>
                <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 p-1.5 text-gray-100 rounded-lg focus:ring-2
                {{ $flashMessage['type'] == 'created' ? 'hover:bg-green-500' : ($flashMessage['type'] == 'updated' ? 'hover:bg-yellow-500' : 'hover:bg-red-500') }}
                hover:transition-all inline-flex items-center justify-center h-8 w-8"
                    @click="show = false" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        
    @endif
</div>
