<div id="indicators-carousel" class="relative w-full" data-carousel="slide">
    {{-- Carousel wrapper --}}
    <div class="relative h-56 overflow-hidden md:h-[30rem]">
         {{-- Items --}}
        @forelse($items as $item)
            {{-- item --}}
            <div class="hidden duration-700 ease-in-out" @if($loop->first) data-carousel-item="active" @else data-carousel-item @endif>
                <img src="{{ $item['image'] }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 size-fit" alt="...">
            </div>
        @empty
            <div>
                Aucune Image
            </div>
        @endforelse
    </div>

    {{-- Slider indicators --}}
    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">

        @forelse($items as $key => $item)
            {{-- indicator --}}
            <button type="button" class="w-3 h-3 rounded-full" @if($loop->first) aria-current="true" @else aria-current="false" @endif aria-label="Slide {{ ($key + 1)}}" data-carousel-slide-to="{{ $key }}"></button>
        @empty
            <div>Aucune Image</div>
        @endforelse

    </div>

    {{-- Slider controls --}}
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-500/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-gray-500/30  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>