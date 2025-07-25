@extends('layouts.master')
@section('content')
        <!-- Carousel Start -->
        <div class="header-carousel">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
               
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/auto/banner.avif') }}" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <div class="container py-4">
                                <div class="row g-5">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Features Start -->
       {{--  <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Cental <span class="text-primary">Features</span></h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
                    </p>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-trophy fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">First Class services</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">24/7 road assistance</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/features-img.png" class="img-fluid w-100" style="object-fit: cover;" alt="Img">
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Quality at Minimum</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-tag fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Free Pick-Up & Drop-Off</h5>
                                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, in illum aperiam ullam magni eligendi?</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-map-pin fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Features End -->

        <!-- About Start -->
        <div class="container-fluid overflow-hidden about py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item">
                            <div class="pb-5">
                                <h1 class="display-5 text-capitalize">À propos de <span class="text-primary">GOURI</span></h1>
                                <p class="mb-0">
                                    Le Groupe Auto-école GOURI est un réseau de 4 auto-écoles sœurs installées dans plusieurs communes d’Abidjan. Fondée officiellement le 21 mai 2015 à Gagnoa, elle est aujourd’hui située à Cocody Angré. Elle propose des formations complètes pour l'obtention de tous types de permis auto/moto, dans un cadre moderne et climatisé.
                                </p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="about-item-inner border p-4">
                                        <div class="about-icon mb-4">
                                            <img src="{{ asset('assets/img/auto/vision.png') }}" class="img-fluid w-50 h-50" alt="Vision">
                                        </div>
                                        <h5 class="mb-3">Notre Vision</h5>
                                        <p class="mb-0">Devenir une référence nationale et internationale dans la formation à la conduite grâce à la qualité de nos services et équipements.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-item-inner border p-4">
                                        <div class="about-icon mb-4">
                                            <img src="{{ asset('assets/img/auto/mission.png') }}" class="img-fluid h-50 w-50" alt="Mission">
                                        </div>
                                        <h5 class="mb-3">Notre Mission</h5>
                                        <p class="mb-0">Former des conducteurs responsables, bien préparés et respectueux du code de la route à travers un accompagnement personnalisé.</p>
                                    </div>
                                </div>
                            </div>
                            <p class="text-item my-4">
                                GOURI Auto-école, dirigée par M. GOURI K. Alain, moniteur certifié de l’Office de Sécurité Routière (OSER), s’appuie sur une équipe qualifiée composée de moniteurs certifiés, de bénévoles et de secrétaires. Elle met à disposition des apprenants une salle de code climatisée, des cours audio-visuels et du matériel pédagogique moderne.
                            </p>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="text-center rounded bg-secondary p-4">
                                        <h1 class="display-6 text-white">9</h1>
                                        <h5 class="text-light mb-0">Années d'expérience</h5>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rounded">
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Formateurs certifiés OSER</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Salle de code climatisée</p>
                                        <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Cours audio-visuels</p>
                                        <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Permis toutes catégories</p>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex align-items-center">
                                    <a href="#contact" class="btn btn-primary rounded py-3 px-5">Nous contacter</a>
                                </div>
                                <div class="col-lg-7">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/img/auto/images.jpeg') }}" class="img-fluid rounded-circle border border-4 border-secondary" style="width: 100px; height: 100px;" alt="M. GOURI K. Alain">
                                        <div class="ms-4">
                                            <h4>M. GOURI K. Alain</h4>
                                            <p class="mb-0">Directeur & Moniteur certifié OSER</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Image de droite -->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-img">
                            <div class="img-1">
                                <img src="{{ asset('assets/img/auto/code.jpg') }}" class="img-fluid rounded h-100 w-100" alt="Auto-école GOURI">
                            </div>
                            <div class="img-2">
                                <img src="{{ asset('assets/img/auto/salle.jpg') }}" class="img-fluid rounded w-100" alt="Salle de formation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

       <!-- Fact Counter -->
        <div class="container-fluid counter bg-secondary py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1200</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Élèves satisfaits</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-car-alt fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">20</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Véhicules de formation</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-building fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">4</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Centres à Abidjan</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter-item text-center">
                            <div class="counter-item-icon mx-auto">
                                <i class="fas fa-clock fa-2x"></i>
                            </div>
                            <div class="counter-counting my-3">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">100000</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                            <h4 class="text-white mb-0">Km parcourus en formation</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Nos <span class="text-primary">Formations</span></h1>
                    <p class="mb-0">Découvrez les différentes catégories de permis que nous proposons, adaptées à vos besoins et à votre véhicule.</p>
                </div>
                <div class="row g-4">

                    <!-- Permis A / AB -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item p-4 h-100 text-center">
                            <div class="service-icon mb-4 text-primary">
                                <i class="fas fa-motorcycle fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Permis A / AB</h5>
                            <p class="mb-0">Formation pour la conduite de motos et tricycles à moteur. Adaptée aux jeunes conducteurs et aux passionnés de deux-roues.</p>
                        </div>
                    </div>

                    <!-- Permis B -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item p-4 h-100 text-center">
                            <div class="service-icon mb-4 text-primary">
                                <i class="fas fa-car fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Permis B</h5>
                            <p class="mb-0">Formation pour la conduite de véhicules légers (voitures). Théorie + pratique avec encadrement professionnel et pédagogique.</p>
                        </div>
                    </div>

                    <!-- Permis C / D / E -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item p-4 h-100 text-center">
                            <div class="service-icon mb-4 text-primary">
                                <i class="fas fa-truck-moving fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Permis C / D / E</h5>
                            <p class="mb-0">Formation complète pour la conduite de camions, bus, véhicules avec remorque. Idéal pour les métiers du transport.</p>
                        </div>
                    </div>

                    <!-- Recyclage & Remise à niveau -->
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item p-4 h-100 text-center">
                            <div class="service-icon mb-4 text-primary">
                                <i class="fas fa-user-graduate fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Recyclage & Remise à niveau</h5>
                            <p class="mb-0">Vous avez un permis mais vous manquez de confiance ? Profitez d’un accompagnement personnalisé pour retrouver vos réflexes.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- Car categories Start -->
        <div class="container-fluid categories pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Nos <span class="text-primary">Offres</span> de Permis</h1>
                    <p class="mb-0">Découvrez nos formules et les coûts détaillés pour chaque catégorie de permis, incluant la formation, la visite médicale et les frais de retrait du permis. Profitez de notre promotion du Nouvel An !</p>
                </div>
                <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('assets/img/auto/motorcycle.png') }}" class="img-fluid w-100 rounded-top" alt="Permis A">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>Permis Catégorie A</h4>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Total: 73.500 XOF</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-6 border-end border-white">
                                        <i class="fa fa-tag text-dark"></i> <span class="text-body ms-1">Coût Unitaire: 50.000 XOF</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-stethoscope text-dark"></i> <span class="text-body ms-1">Visite Médicale: 11.000 XOF</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-id-card text-dark"></i> <span class="text-body ms-1">Retrait Permis: 12.500 XOF</span>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('assets/img/auto/mercedes.png') }}" class="img-fluid w-100 rounded-top" alt="Permis B">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>Permis Catégorie B</h4>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Total: 78.500 XOF</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-6 border-end border-white">
                                        <i class="fa fa-tag text-dark"></i> <span class="text-body ms-1">Coût Unitaire: 50.000 XOF</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-stethoscope text-dark"></i> <span class="text-body ms-1">Visite Médicale: 16.000 XOF</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-id-card text-dark"></i> <span class="text-body ms-1">Retrait Permis: 12.500 XOF</span>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('assets/img/auto/car-1024x653.png') }}" class="img-fluid w-100 rounded-top" alt="Permis AB">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>Permis Catégorie AB</h4>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Total: 78.500 XOF</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-6 border-end border-white">
                                        <i class="fa fa-tag text-dark"></i> <span class="text-body ms-1">Coût Unitaire: 50.000 XOF</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-stethoscope text-dark"></i> <span class="text-body ms-1">Visite Médicale: 16.000 XOF</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-id-card text-dark"></i> <span class="text-body ms-1">Retrait Permis: 12.500 XOF</span>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('assets/img/auto/recyclage-1-1024x683.webp') }}" class="img-fluid w-100 rounded-top" alt="Permis BCDE">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>Permis Catégorie CDE</h4>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Total: 83.500 XOF</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-6 border-end border-white">
                                        <i class="fa fa-tag text-dark"></i> <span class="text-body ms-1">Coût Unitaire: 50.000 XOF</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-stethoscope text-dark"></i> <span class="text-body ms-1">Visite Médicale: 21.000 XOF</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-id-card text-dark"></i> <span class="text-body ms-1">Retrait Permis: 12.500 XOF</span>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                            </div>
                        </div>
                    </div>

                    <div class="categories-item p-4">
                        <div class="categories-item-inner">
                            <div class="categories-img rounded-top">
                                <img src="{{ asset('assets/img/auto/recyclage-1-1024x683.webp') }}" class="img-fluid w-100 rounded-top" alt="Permis ABCDE">
                            </div>
                            <div class="categories-content rounded-bottom p-4">
                                <h4>Permis Catégorie ABCDE</h4>
                                <div class="mb-4">
                                    <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Total: 83.500 XOF</h4>
                                </div>
                                <div class="row gy-2 gx-0 text-center mb-4">
                                    <div class="col-6 border-end border-white">
                                        <i class="fa fa-tag text-dark"></i> <span class="text-body ms-1">Coût Unitaire: 50.000 XOF</span>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa fa-stethoscope text-dark"></i> <span class="text-body ms-1">Visite Médicale: 21.000 XOF</span>
                                    </div>
                                    <div class="col-12">
                                        <i class="fa fa-id-card text-dark"></i> <span class="text-body ms-1">Retrait Permis: 12.500 XOF</span>
                                    </div>
                                </div>
                                <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       

       

<style>
/* Assure que toutes les images à l'intérieur de .categories-img ont la même hauteur et ne débordent pas */
.categories-item .categories-img {
    height: 200px; /* Définissez une hauteur fixe pour toutes les zones d'image */
    overflow: hidden; /* Cache tout ce qui dépasse */
    display: flex; /* Utilise flexbox pour centrer l'image */
    align-items: center; /* Centre verticalement l'image */
    justify-content: center; /* Centre horizontalement l'image */
}
.categories-item .categories-img img {
    width: 100%; /* L'image prend toute la largeur du conteneur */
    height: 100%; /* L'image prend toute la hauteur du conteneur */
    object-fit: cover; /* Recadre l'image pour qu'elle couvre entièrement le conteneur sans déformation, coupant les bords si nécessaire */
    /* Si 'object-fit: cover' ne suffit pas et que l'image doit être entièrement visible (avec des marges si nécessaire)
       et que le conteneur d'image a des dimensions fixes, utilisez 'object-fit: contain;'. */
}
/* Assure que la section de contenu de la carte a une hauteur minimale flexible */
.categories-item-inner {
    display: flex;
    flex-direction: column;
    height: 100%; /* Permet à l'élément interne de la carte de prendre toute la hauteur disponible */
}

.categories-content {
    flex-grow: 1; /* Permet au contenu de prendre tout l'espace vertical restant */
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Aide à espacer le titre, les infos et le bouton */
}

/* S'assurer que les paragraphes de description ont une hauteur uniforme */
.categories-content .row.gy-2.gx-0.text-center.mb-4 {
    flex-grow: 1; /* Permet à ce bloc d'informations de pousser le bouton vers le bas */
    display: flex;
    flex-wrap: wrap; /* Assure que les colonnes se wrappent si nécessaire */
    align-content: flex-start; /* Aligne le contenu au début */
}
/* Pour les paragraphes, on peut ne pas leur donner de min-height fixe car les divs parents gèrent mieux cela */
</style>  

@endsection