<x-guest-layout>

    {{-- Breadcrumb --}}
    @php
        $breadcrumpItems = [
            ['active'  => True, 'name' => 'Programmes'],
        ]
    @endphp
    {{-- <x-breadcrumb :items="$breadcrumpItems"></x-breadcrumb> --}}
 
    {{-- Jumbotron --}}
    @php
        $jumbotronItems = [
            'image' => '/img/stClass.jpg',
            'title' => 'Bienvenue au Collège Pavillon Mixte de Berrette (CPMB)',
            'text' => "Le CPMB est une institution scolaire de renom. Excellence académique - Épanouissement personnel - Engagement citoyen, apprendre, échanger et s'épanouir.",
            'start' => [
                'link' => route('register'),
                'text' => 'Commencez maintenant',
            ],
            'more' => [
                'link' => route('about'),
                'text' => 'En savoir plus',
            ],
        ];
    @endphp
    <x-jumbotron :items="$jumbotronItems"></x-jumbotron>

    {{-- About  --}}
    <section class="py-10 bg-gray-100" data-aos="fade-up" data-aos-duration="1200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="mb-6 text-2xl font-bold text-center">Qui sommes-nous ?</h2>
            <p class="text-lg text-center mx-auto max-w-2xl">
            Le Collège Pavillon Mixte de Berrette (CPMB) est une institution d’enseignement reconnue pour son engagement à offrir un environnement d’apprentissage stimulant et bienveillant, favorisant la réussite scolaire et le développement intégral de chaque élève.
            </p>
        </div>
    </section>

    {{-- Nos attouts --}}
    <section class="py-10" data-aos="fade-up" data-aos-duration="1200">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="mb-12 text-2xl font-bold text-center">Nos atouts</h2>
            <div class="grid gap-8 md:grid-cols-3">
            
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-xl h-full overflow-hidden">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=800&q=80" alt="Programmes" class="w-full h-56 object-cover">
                <div class="p-6">
                <h5 class="text-lg font-bold mb-2">Programmes diversifiés</h5>
                <p class="text-gray-600">Des cursus adaptés à tous les niveaux : préscolaire, fondamental, secondaire, avec un suivi personnalisé.</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-xl h-full overflow-hidden">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="Équipe" class="w-full h-56 object-cover">
                <div class="p-6">
                <h5 class="text-lg font-bold mb-2">Équipe pédagogique engagée</h5>
                <p class="text-gray-600">Des enseignants passionnés et compétents dédiés à la réussite et au bien-être des élèves.</p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-xl h-full overflow-hidden">
                <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?auto=format&fit=crop&w=800&q=80" alt="Valeurs" class="w-full h-56 object-cover">
                <div class="p-6">
                <h5 class="text-lg font-bold mb-2">Valeurs fortes</h5>
                <p class="text-gray-600">Respect, discipline, citoyenneté et esprit d’équipe pour préparer les citoyens de demain.</p>
                </div>
            </div>

            </div>
        </div>
    </section>

    {{-- Statistics --}}
    <x-statistics></x-statistics>

    {{-- comment --}}
    <x-comment></x-comment>

    {{-- Contact --}}
    <x-contact></x-contact>

    {{-- map --}}
    <x-map></x-map>

</x-guest-layout>