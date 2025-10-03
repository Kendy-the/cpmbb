<x-guest-layout>
    {{-- Breadcrumb --}}
    @php
        $breadcrumpItems = [
            ['active'  => True, 'link' => route('programs'), 'name' => 'Programmes'],
        ]
    @endphp
    <x-breadcrumb :items="$breadcrumpItems"></x-breadcrumb>
 
    {{-- Jumbotron --}}
    @php
        $jumbotronItems = [
            'image' => '/img/stClass.jpg',
            'title' => 'Decouverz nos programmes d\'enseignement Scolaires',
            'text' => "Excellence académique - Épanouissement personnel - Engagement citoyen.",
        ];
    @endphp
    <x-jumbotron :items="$jumbotronItems"></x-jumbotron>

    {{-- programs --}}
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Titre principal -->
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-green-700">Nos Programmes Scolaires</h2>
                <p class="mt-3 text-gray-600 text-lg">Découvrez les cycles et matières enseignées à notre établissement.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
    
                @php
                    $programmes = [
                        [
                            'link' => '#',
                            'linkText' => 'En savoir plus',
                            'image' => '/img/book.jpg',
                            'title' => 'Primaire',
                            'description' => 'Un enseignement de base en lecture, écriture, mathématiques et éveil scientifique.',
                            'matieres' => ['Français', 'Mathématiques', 'Sciences', 'Histoire-Géo', 'Arts Plastiques','etc,..']
                        ],
                        [
                            'link' => '#',
                            'linkText' => 'En savoir plus',
                            'image' => '/img/stClass.jpg',
                            'title' => 'Secondaire',
                            'description' => 'Préparation aux examens nationaux avec des options variées pour chaque élève.',
                            'matieres' => ['Littérature', 'Mathématiques Avancées', 'Physique-Chimie', 'Biologie', 'Langues Vivantes','etc,...']
                        ],
                        [
                            'link' => '#',
                            'linkText' => 'En savoir plus',
                            'image' => '/img/biblio.jpg',
                            'title' => 'Préscolaire',
                            'description' => "Un environnement ludique pour le développement global des tout-petits.",
                            'matieres' => ['Jeux Éducatifs', 'Activités Manuelles', 'Chansons et Comptines', 'Découverte du Monde','etc,...']
                        ],
                    ];
                @endphp
    
                {{-- Liste des programmes --}}
                @foreach ($programmes as $programme)
                    <x-card :items="$programme"></x-card>
                @endforeach
            </div>
        </div>
    </div>
    
    <x-faq></x-faq>
</x-layout>