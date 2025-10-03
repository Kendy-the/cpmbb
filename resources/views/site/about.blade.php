<x-guest-layout>
    
    {{-- Breadcrumb --}}
    @php
        $breadcrumpItems = [
            ['active'  => True, 'link' => route('about'), 'name' => 'A propos'],
        ]
    @endphp

    <x-breadcrumb :items="$breadcrumpItems"></x-breadcrumb>

    {{-- Jumbotron --}}
    @php
        $jumbotronItems = [
            'image' => '/img/immeuble.jpg',
            'title' => 'À propos de notre Établissement',
            'text' => "Une tradition d’excellence et un avenir tourné vers l’innovation éducative.",
        ];
    @endphp
    <x-jumbotron :items="$jumbotronItems"></x-jumbotron>
    
    <!-- Histoire -->
    <div class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-green-700 mb-6 text-center">Notre Histoire</h2>
            <p class="text-gray-700 leading-relaxed">
                Fondé en 1980, notre établissement scolaire s'est donné pour mission de former les générations
                futures en alliant rigueur académique et ouverture d'esprit. Depuis plus de 40 ans, nous avons
                accompagné des milliers d'élèves vers la réussite scolaire et professionnelle.
            </p>
        </div>
    </div>

    <!-- Mission et Valeurs -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10">
            <div>
                <h2 class="text-3xl font-bold text-green-700 mb-4">Notre Mission</h2>
                <p class="text-gray-700 leading-relaxed">
                    Offrir une éducation de qualité, accessible à tous, qui prépare les élèves à devenir
                    des citoyens responsables, compétents et ouverts sur le monde.
                </p>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-green-700 mb-4">Nos Valeurs</h2>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Excellence académique</li>
                    <li>Respect et discipline</li>
                    <li>Innovation pédagogique</li>
                    <li>Ouverture et inclusion</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Public concerné -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-green-700 mb-4">Un établissement ouvert à tous</h2>
            <p class="text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Notre établissement accueille des élèves de tous horizons, sans distinction sociale,
                culturelle ou religieuse. Nous croyons fermement que l’éducation est un droit universel
                et qu’elle doit être accessible à chacun.
            </p>
        </div>
    </div>

    @php
        $team = [
            [
                'name' => 'Jean Dupont',
                'role' => 'Directeur Général',
                'photo' => '/img/biblio.jpg'
            ],
            [
                'name' => 'Marie Claire',
                'role' => 'Directrice des Études',
                'photo' => '/img/biblio.jpg'
            ],
            [
                'name' => 'Paul Martin',
                'role' => 'Responsable Pédagogique',
                'photo' => '/img/biblio.jpg'
            ],
        ];
    @endphp

    <!-- Équipe -->
    <div class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-green-700 mb-12">Notre Équipe de Direction</h2>
            <div class="grid md:grid-cols-3 gap-10">
                @foreach($team as $member)
                    <div class="bg-gray-50 rounded shadow-sm border p-6 hover:shadow-xl transition">
                        <img src="{{ $member['photo'] }}" alt="{{ $member['name'] }}"
                            class=" size-52 rounded-full mx-auto object-cover mb-4 border-4 border-green-600">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $member['name'] }}</h3>
                        <p class="text-green-600 font-medium">{{ $member['role'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <x-card-with></x-card-with>

</x-guest-layout>
