<div class="max-w-sm flex flex-col justify-between bg-white border border-gray-300 rounded-lg shadow-sm">
    <a href="{{$items['link']}}">
        <img class="rounded-t-lg" src="{{$items['image']}}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{$items['link']}}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $items['title'] }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700">{{ $items['description'] }}</p>

        {{-- si on a des matieres --}}
        @if(isset($items['matieres']))
            <div class="mt-4">
                <h4 class="text-lg font-medium text-gray-800">Matières :</h4>
                <ul class="mt-2 list-disc list-inside text-gray-700 space-y-1">
                    @foreach ($items['matieres'] as $matiere)
                        <li>{{ $matiere }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{$items['link']}}" class="inline-flex items-center mt-5 px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300">
            {{ $items['linkText'] }}
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
