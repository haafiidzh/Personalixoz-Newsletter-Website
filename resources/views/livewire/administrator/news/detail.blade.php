<div>
    <div class="flex flex-col gap-5 mb-5">
        <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
            <h1 class="text-2xl text-center font-bold mb-1" >{{ $news->title }}</h1>
            <p class="text-gray-600 text-sm text-center mb-3">{{ $news->category->name }}</p>
            <div class="flex flex-col text-sm">
                <p>Oleh <span class="font-bold">{{ $news->author->name }}</span></p>
                <div class="flex justify-between">    
                    <p>{{ $news->created_at->format('d F Y, H.i') }}</p>
                    <p class="flex items-center gap-1">
                        <i class="{{ $news->is_published == true ? 'text-green-700 fa-solid fa-circle-check' : 'text-red-700 fa-solid fa-circle-xmark' }}"></i>
                        <span class="font-semibold">{{ $news->is_published == true ? 'Published' : 'Not Published' }}</span>
                    </p>
                </div>
                
            </div>
            
        </div>
        <div class="w-3/4 px-6 py-4 shadow-md rounded-3xl bg-white">
            <div class="flex flex-col gap-5">
                <img class="rounded-md" src="{{ Storage::url($news->image) }}" alt="">
    
                <p>{!! $news->content !!}</p>
            </div>
        </div>

    </div>
</div>
