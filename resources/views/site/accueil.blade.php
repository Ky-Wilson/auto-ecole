@extends('layouts.master')
@section('content')
        <!-- Carousel Start -->
        <div class="header-carousel">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/auto/banner1.jpg') }}" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <div class="container py-4">
                                <div class="row g-5">
                                    <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                    <div class="bg-secondary rounded p-5">
                                        <h4 class="text-white mb-4">Inscription à une formation</h4>
                                        @if(session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('inscription.envoyer') }}">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <select class="form-select" name="formation" required>
                                                        <option value="" selected disabled>Choisissez la formation</option>
                                                        <option value="Permis A / AB (Moto)">Permis A / AB (Moto)</option>
                                                        <option value="Permis B (Voiture)">Permis B (Voiture)</option>
                                                        <option value="Permis C / D / E (Camion / Bus)">Permis C / D / E (Camion / Bus)</option>
                                                        <option value="Recyclage / remise à niveau">Recyclage / remise à niveau</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" name="nom" class="form-control" placeholder="Nom complet" required>
                                                </div>
                                                <div class="col-12">
                                                    <input type="tel" name="telephone" class="form-control" placeholder="Téléphone" required>
                                                </div>
                                                <div class="col-12">
                                                    <input type="email" name="email" class="form-control" placeholder="Adresse Email (optionnel)">
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" name="commune" class="form-control" placeholder="Commune de résidence">
                                                </div>
                                                <div class="col-12">
                                                    <label class="text-white mb-1">Date souhaitée pour commencer :</label>
                                                    <input type="date" name="date_debut" class="form-control">
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-light w-100 py-2">Envoyer ma demande</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-flex fadeInRight animated align-items-center" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                        <div class="text-start">
                                            <h1 class="display-5 text-white">Rejoignez les meilleurs conducteurs avec GOURI Auto-école</h1>
                                            <p class="text-light">Formations certifiées | Moniteurs expérimentés | Cadre moderne</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Features Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class="display-5 text-capitalize mb-3">Nos <span class="text-primary">Avantages</span></h1>
                    <p class="mb-0">Chez GOURI Auto-école, nous mettons un point d’honneur à offrir une formation de qualité, encadrée par des moniteurs certifiés et expérimentés, dans un environnement moderne et motivant.</p>
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
                                        <h5 class="mb-3">Encadrement certifié</h5>
                                        <p class="mb-0">Nos formateurs sont certifiés par l’Office de Sécurité Routière et bénéficient de plusieurs années d’expérience pratique et théorique.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <span class="fa fa-road fa-2x"></span>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-3">Formation complète auto/moto</h5>
                                        <p class="mb-0">Permis toutes catégories : A, AB, BCDE, ABCDE avec des cours adaptés à votre niveau, en salle climatisée avec supports modernes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('assets/img/auto/auto.jpg') }}" class="img-fluid w-100" style="object-fit: cover; border-radius: 10PX;" alt="Formation auto-école GOURI">
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4 gx-0">
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Cadre moderne & sécurisé</h5>
                                        <p class="mb-0">Notre centre est équipé de salles climatisées, d’audiovisuels pédagogiques et d’un espace d’apprentissage confortable.</p>
                                    </div>
                                    <div class="feature-icon">
                                        <span class="fa fa-tag fa-2x"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-item justify-content-end">
                                    <div class="text-end me-4">
                                        <h5 class="mb-3">Accessibilité & proximité</h5>
                                        <p class="mb-0">Facilement accessible à Cocody Angré entre la station Shell et l’école Notre Dame. Nous restons proches de vous à tout moment.</p>
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
        </div>

        <!-- Features End -->

        

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

       

       <div class="container-fluid categories pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Catégories de <span class="text-primary">véhicules</span></h1>
            <p class="mb-0">GOURI Auto-école vous propose une formation sur différentes catégories de véhicules pour l’obtention de tous types de permis : moto, voiture, camion… encadrée par des moniteurs certifiés.</p>
        </div>
        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top embed-responsive embed-responsive-4by3">
                        <img src="{{ asset('assets/img/auto/motorcycle.png') }}" class="img-fluid w-100 rounded-top " alt="Moto">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Permis A / AB</h4>
                        <p class="mb-3">Conduite de motos et tricycles à moteur.</p>
                        <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top embed-responsive embed-responsive-4by3">
                        <img src="{{ asset('assets/img/auto/mercedes.png') }}" class="img-fluid w-100 rounded-top " alt="Voiture">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Permis B</h4>
                        <p class="mb-3">Conduite de véhicules légers.</p>
                        <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top embed-responsive embed-responsive-4by3">
                        <img src="{{ asset('assets/img/auto/car-1024x653.png') }}" class="img-fluid w-100 rounded-top " alt="Camion">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Permis C / D / E</h4>
                        <p class="mb-3">Formation pour la conduite de camions, bus et remorques.</p>
                        <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top embed-responsive embed-responsive-4by3">
                        <img src="{{ asset('assets/img/auto/recyclage-1-1024x683.webp') }}" class="img-fluid w-100 rounded-top " alt="Remise à niveau">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Recyclage & Remise à niveau</h4>
                        <p class="mb-3">Vous avez déjà un permis mais vous souhaitez vous remettre à niveau ? Nous vous accompagnons pas à pas.</p>
                        <a href="#contact" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
.categories-item-inner {
    display: flex;
    flex-direction: column;
    height: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    overflow: hidden;
}

.categories-img {
    height: 200px;
    width: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}

.categories-img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.categories-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1rem;
}

.categories-content h4 {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    min-height: 2.5em;
}

.categories-content p {
    flex: 1;
    min-height: 4em;
    margin-bottom: 1rem;
}


</style>
@endsection