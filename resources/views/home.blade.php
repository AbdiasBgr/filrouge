@extends('layouts.app')
@section('content')

<section id="accueil" class="relative">

    <div class="blob1"></div>

    <div class="blob2 "></div>

    <div class="container py-20">
        <div class="flex flex-col items-center z-20 md:flex-row">
            <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                <h1 class="title mb-4">Élevez vos Finances, Bâtissez votre Avenir.</h1>
                <p class="leading-relaxed mb-10">Découvrez les Clés de la Gestion Financière et de l'Investissement à Long Terme avec WiseFinance</p>
                <button class="btn uppercase">Commencer mon Aventure</button>
            </div>

            <div class="md:w-1/2">
                <img src="/images/F1.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="services" class="bg-color-primary-light">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Nos Services</h4>
            <h1 class="title">Commencez votre aventure vers une gestion financière éclairée et épanouissante dès aujourd'hui.</h1>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
            <!-- card no 1 -->
            <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                    <i class="fa-solid fa-calendar-days text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold py-4">Consultation Personnalisée</h3>
                <p class="leading-relaxed">Explorez une consultation exclusive avec nos experts financiers pour des conseils personnalisés sur mesure. Que vous ayez des questions sur l'investissement, la planification fiscale ou la gestion de patrimoine, notre équipe dédiée est prête à vous aider. Bénéficiez de conseils adaptés à votre situation financière particulière, mettant ainsi en lumière des opportunités uniques pour optimiser votre parcours financier. Prenez le premier pas vers la réalisation de vos objectifs financiers avec sagesse et assurance.</p>
            </div>

            <!-- card no 2 -->
            <div class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer">
                <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                    <i class="fa-solid fa-video text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold py-4">Formations Interactives</h3>
                <p class="leading-relaxed">Plongez dans notre bibliothèque de cours interactifs conçus pour démystifier le monde complexe de la finance personnelle. Nos formations englobent une variété de sujets cruciaux, allant de la gestion budgétaire à la planification successorale. Explorez les nuances de l'investissement à long terme, maîtrisez les stratégies pour optimiser vos revenus, et apprenez les secrets d'une gestion financière avisée.</p>
            </div>

            <!-- card no 3 -->
            <div class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                    <i class="fa-solid fa-phone text-4xl"></i>
                </div>
                <h3 class="text-xl font-bold py-4">Support 24/24</h3>
                <p class="leading-relaxed">Chez WiseFinance, notre engagement envers votre réussite financière ne connaît pas d'horaires. Notre équipe de support dédiée est disponible 24 heures sur 24, 7 jours sur 7, pour répondre à toutes vos questions, résoudre vos préoccupations et vous guider à chaque étape de votre parcours. Obtenez une assistance personnalisée à tout moment, vous assurant ainsi une tranquillité d'esprit totale pendant votre exploration des connaissances financières et de l'investissement à long terme. Votre succès est notre priorité, à chaque instant.</p>
            </div>
        </div>
    </div>
</section>


<section id="argent">
    <div class="container py-20 relative">
        <div class="blob1"></div>

        <div class="blob2"></div>

        <div class="flex flex-col items-center justify-between md:flex-row">
            <div class="mb-12 md:w-1/2">
                <img src="/images/F2.png" alt="">
            </div>

            <div class="text-center md:text-left md:w-1/2 md:ml-20">
                <h4 class="font-bold text-color-secondary mb-4">Votre Partenaire Financier</h4>
                <h1 class="title mb-4">Exploitez le Pouvoir de la Gestion Financière avec WiseFinance</h1>
                <p class="leading-relaxed mb-10">Découvrez des fonctionnalités uniques conçues pour vous aider à développer votre patrimoine, maîtriser l'investissement à long terme et atteindre vos objectifs financiers. Des consultations personnalisées, des formations interactives et un support client 24/24 font partie de l'expérience WiseFinance</p>
                <button class="btn">Découvrir Plus</button>
            </div>
        </div>
    </div>
</section>

<section id="comment-sa-marche" class="bg-color-primary-light">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Les 3 Étapes vers une Expérience Optimal avec WiseFinance</h4>
            <h1 class="title">Naviguez dans l'Univers de la Liberté Financière</h1>
        </div>

        <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
            <!-- card 1  -->
            <div class="text-center cursor-pointer">
                <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                    <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/public/images/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">1</p>
                </div>

                <h3 class="text-xl font-bold py-4">Découvrez WiseFinance</h3>
                <p class="leading-relaxed">Plongez dans l'univers de WiseFinance et explorez des connaissances financières avancées pour optimiser votre gestion financière.</p>
            </div>

            <!-- card 2  -->
            <div class="text-center cursor-pointer">
                <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-color-secondary">
                    <p class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/public/images/line-bottom.png')] lg:after:absolute lg:after:top-10 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">2</p>
                </div>
                <h3 class="text-xl font-bold py-4">Explorez nos Formations Interactives</h3>
                <p class="leading-relaxed">Plongez dans notre bibliothèque de cours interactifs et développez des compétences financières solides pour une gestion autonome de votre patrimoine.</p>
            </div>

            <!-- card 3  -->
            <div class="text-center cursor-pointer">
                <div class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                    <p class="text-6xl">3</p>
                </div>
                <h3 class="text-xl font-bold py-4">Inscrivez-vous pour une Consultation Personnalisée</h3>
                <p class="leading-relaxed">Profitez d'une consultation individuelle avec nos experts financiers pour des conseils adaptés à votre situation unique.</p>
            </div>
        </div>
    </div>
</section>

<section id="temoignages">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Avis des Utilisateurs</h4>
            <h1 class="title">Ce que disent nos clients de WiseFinance</h1>
        </div>

        <!-- Conteneur des avis  -->
        <div class="mt-8">
            <div class="flex items-center justify-center flex-wrap">
                <img src="/images/userblack.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic" onclick="showReview()">
                <img src="/images/user2.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="/images/user3.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="/images/user4.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
                <img src="/images/user5.jpg" alt="" class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()">
            </div>

            <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                <div class="user-text active-text">
                    <p class="md:text-2xl mb-6">"WiseFinance a transformé ma façon de gérer mes finances. Les formations interactives sont incroyablement instructives, et le support 24/24 a répondu à toutes mes questions, même les plus pointues. Merci WiseFinance pour cette expérience exceptionnelle !" </p>
                    <h4 class="font-bold text-color-secondary mb-1">Sophie Martin</h4>
                    <p>Entrepreneure</p>
                </div>

                <div class="user-text">
                    <p class="md:text-2xl mb-6">"En tant qu'investisseur à long terme, WiseFinance m'a fourni les connaissances et les outils dont j'avais besoin pour prendre des décisions éclairées. Les formations sur la gestion du patrimoine sont d'une grande valeur et m'ont aidé à construire une stratégie solide." </p>
                    <h4 class="font-bold text-color-secondary mb-1">Jean Dupont</h4>
                    <p>Investisseur</p>
                </div>

                <div class="user-text">
                    <p class="md:text-2xl mb-6">"WiseFinance est bien plus qu'une plateforme éducative. C'est une ressource inestimable pour quiconque souhaite prendre le contrôle de ses finances. Les conseils personnalisés m'ont permis de maximiser mes revenus et de planifier mon avenir financièrement." </p>
                    <h4 class="font-bold text-color-secondary mb-1">Marie Dubois</h4>
                    <p>Professionnelle indépendante</p>
                </div>

                <div class="user-text">
                    <p class="md:text-2xl mb-6">"Les formations de WiseFinance sont exceptionnelles. Elles couvrent une gamme étendue de sujets, de la gestion des dépenses à l'investissement à long terme. C'est la ressource idéale pour toute personne cherchant à améliorer sa santé financière." </p>
                    <h4 class="font-bold text-color-secondary mb-1">Paul Lefevre</h4>
                    <p>Consultant financier</p>
                </div>

                <div class="user-text">
                    <p class="md:text-2xl mb-6">"Grâce à WiseFinance , j'ai acquis une compréhension approfondie de la gestion du patrimoine. Les formations sont structurées de manière logique, et le support 24/24 a été toujours présent pour répondre à mes préoccupations." </p>
                    <h4 class="font-bold text-color-secondary mb-1">Isabelle Gagnon</h4>
                    <p>Entrepreneure</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="offres" class="bg-color-primary-light">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Offres</h4>
            <h1 class="title">Profitez de nos offres avantageux</h1>

            <!-- Interrupteur rond -->
            <div class="mt-5 flex items-center justify-center gap-4">
                <p>Facturer mensuellement</p>
                <label class="cursor-pointer relative inline-block w-20 h-8 rounded-full">
                    <input type="checkbox" id="toggleBtn" class="peer opacity-0 w-0 h-0">
                    <span class="absolute top-0 left-0 right-0 bottom-0 bg-color-primary-light border border-solid border-color-gray rounded-full duration-300 before:content-[''] before:absolute before:w-6 before:h-6 before:bottom-1 before:left-1 before:rounded-full before:bg-color-white before:duration-300 peer-checked:before:translate-x-12 peer-checked:bg-color-secondary"></span>
                </label>
                <p>Facturer annuellement</p>
            </div>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <!-- Carte 1 -->
            <div class="card relative h-auto w-auto">
                <!-- Face avant -->
                <div id="card_1_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            20000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Basique</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Liaison entre différentes cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>

                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>

                <!-- Face arrière -->
                <div id="card_1_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            240000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Basique</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Liaison entre différentes cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>


                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>
            </div>

            <!-- Carte 2 -->
            <div class="card relative h-auto w-auto">
                <!-- Face avant -->
                <div id="card_2_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            50000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Standard</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Liaison entre différents cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>


                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>

                <!-- Face arrière -->
                <div id="card_2_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            600000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Standard</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4"> Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Liaison entre différents cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-gray"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>


                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>
            </div>

            <!-- Carte 3 -->
            <div class="card relative h-auto w-auto">
                <!-- Face avant -->
                <div id="card_3_front" class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            80000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Avancé</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Liaison entre différents cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>


                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>

                <!-- Face arrière  -->
                <div id="card_3_back" class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                    <div class="relative">
                        <p class="text-6xl pl-2 font-bold before:content-['CF'] before:absolute before:text-sm before:top-0 before:left-0">
                            960000<span class="text-sm font-normal tracking-widest">/par mois</span>
                        </p>
                    </div>

                    <div class="py-10">
                        <h3 class="text-xl font-bold pb-3">Premium</h3>
                        <p class="leading-relaxed">Pour les débutants qui veulent étendre leur activité à l'échelle mondiale</p>
                    </div>

                    <ul class="space-y-4 pb-10">
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Gestion des Budgets</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Transactions automatiques</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Accès aux formations</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Liaison entre différents cartes bancaires</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-bookmark text-color-secondary"></i>
                            <span class="pl-4">Droit à un Agent Personnel</span>
                        </li>
                    </ul>


                    <button class="card_btn"><a href="#contact">Commencer</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Innovation et Amélioration de la Qualité</h4>
            <h1 class="title">Dernières Mises à Jour, Solutions et Actualités de WiseFinance</h1>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <!-- card no 1 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="/images/blog1.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>30 novembre 2023</p>
                        <p>1 min de lecture</p>
                    </div>

                    <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Quatre façons dont WiseFinance peut améliorer votre bien-être financier !</a>

                    <p class="leading-relaxed my-5">Explorez les fonctionnalités uniques et les avantages que WiseFinance offre pour améliorer votre parcours financier et votre bien-être...</p>

                    <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">En savoir plus</span>
                    </a>
                </div>
            </div>

            <!-- card no 2 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="/images/blog2.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>30 novembre 2022</p>
                        <p>1 min de lecture</p>
                    </div>

                    <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Optimisez votre budget avec WiseFinance pour une productivité maximale !</a>

                    <p class="leading-relaxed my-5">Découvrez des stratégies et des conseils de budgétisation efficaces pour maximiser la productivité et atteindre vos objectifs financiers avec WiseFinance...</p>

                    <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">En savoir plus</span>
                    </a>
                </div>
            </div>

            <!-- card no 3 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="/images/blog3.jpg" alt="" class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out">
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>30 novembre 2022</p>
                        <p>1 min de lecture</p>
                    </div>

                    <a href="#blog" class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Autonomisation des petites entreprises : L'avantage WiseFinance</a>

                    <p class="leading-relaxed my-5">Explorez comment WiseFinance offre bien plus que des services financiers. Nous offrons également des formations approfondies pour aider les entrepreneurs..</p>

                    <a href="#blog" class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">En savoir plus</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="download-app" class="bg-color-primary-light">
    <div class="container h-[80vh] grid place-items-center">
        <div class="text-center md:w-2/3 m-auto">
            <h1 class="title">Téléchargez l'application maintenant et économisez votre argent</h1>
            <p class="leading-relaxed pt-5">Offrant une liste impressionnante de solutions financières à long terme avec une expérience et une expertise dans divers secteurs.</p>

            <div class="flex flex-col md:flex-row items-center justify-center gap-5 pt-10">
                <a href="#" class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                    <img src="/images/ios-store-dark.png" alt="">
                </a>
                <a href="#" class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                    <img src="/images/g-play-dark.png" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">Voulez-faire partie de notre communaute? ou avez-vous une question ?</h4>
            <h1 class="title">Contactez-nous</h1>
        </div>

        <form>
            <div class="w-full m-auto text-center md:w-2/3">
                <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                    <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Nom">

                    <input type="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="E-mail">

                    <input type="tel" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Téléphone">

                    <input type="text" class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Entreprise">
                </div>

                <textarea rows="4" class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary" placeholder="Message"></textarea>

                <button class="btn mt-10">Envoyer le message</button>
            </div>
        </form>
    </div>
</section>

<section id="faq">
    <div class="container py-20 relative">
        <div class="blob1"></div>

        <div class="blob2"></div>

        <div class="flex flex-col items-center justify-between md:flex-row">
            <div class="mb-5 md:w-1/2">
                <img src="/images/FAQ.svg" alt="">
            </div>

            <div class="text-center md:text-left md:w-1/2 md:ml-20">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug text-color-secondary mb-4">Foire aux questions <span class="text-yellow-500">fréquemment</span> posées</h1>
                <div class=" flex flex-col md:flex-row items-center justify-center">
                    <div class="">
                        <!-- Products  -->
                        <div class="relative w-[400px] bg-yellow-500 text-color-white p-0 shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15), -6px_-6px_10px_-1px_rgba(255,255,255,0.8)] rounded-xl m-[15px]">
                            <!-- Heading -->
                            <input type="checkbox" id="input1" class="absolute peer opacity-0">
                            <label for="input1" class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center">Qu'est-ce que WiseFinance ?</label>
                            <!-- Arrow -->
                            <div class="absolute top-[15px] right-[30px] rolate-0 peer-checked:rotate-180 duration-200">
                                <ion-icon name="ios-arrow-down"></ion-icon>
                            </div>
                            <!-- Content -->
                            <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                                <p class="p-[20px] text-sm">
                                    WiseFinance est une Institution financière offrant une variété de services pour une gestion intelligente de votre argent. Nous proposons des solutions innovantes pour aider nos utilisateurs à optimiser leurs finances.
                                </p>
                            </div>
                        </div>
                        <!-- Informations -->
                        <div class="">
                            <!-- Informations  -->
                            <div class="relative w-[400px] bg-yellow-500 text-color-white p-0 shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15), -6px_-6px_10px_-1px_rgba(255,255,255,0.8)] rounded-xl m-[15px]">
                                <!-- Heading -->
                                <input type="checkbox" id="input2" class="absolute peer opacity-0">
                                <label for="input2" class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center"> Comment puis-je annuler?</label>
                                <!-- Arrow -->
                                <div class="absolute top-[15px] right-[30px] rolate-0 peer-checked:rotate-180 duration-200">
                                    <ion-icon name="ios-arrow-down"></ion-icon>
                                </div>
                                <!-- Content -->
                                <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                                    <p class="p-[20px] text-sm">
                                        WiseFinance est une plateforme financière offrant une variété de services pour une gestion intelligente de votre argent. Vous pouvez annuler votre abonnement en toute simplicité.
                                    </p>
                                </div>
                            </div>
                            <!--  Questions -->
                            <div class="">
                                <!-- Informations  -->
                                <div class="relative w-[400px] bg-yellow-500 text-color-white p-0 shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15), -6px_-6px_10px_-1px_rgba(255,255,255,0.8)] rounded-xl m-[15px]">
                                    <!-- Heading -->
                                    <input type="checkbox" id="input3" class="absolute peer opacity-0">
                                    <label for="input3" class="font-bold tracking-[1px] mx-[20px] h-[50px] flex items-center">Quelle est la garantie de WiseFinance?</label>
                                    <!-- Arrow -->
                                    <div class="absolute top-[15px] right-[30px] rolate-0 peer-checked:rotate-180 duration-200">
                                        <ion-icon name="ios-arrow-down"></ion-icon>
                                    </div>
                                    <!-- Content -->
                                    <div class="max-h-0 overflow-hidden peer-checked:max-h-full">
                                        <p class="p-[20px] text-sm">
                                            Nous nous engagons à vous apporter toute l'aide et le soutien nécéssaire pour atteindre votre liberté financière.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection