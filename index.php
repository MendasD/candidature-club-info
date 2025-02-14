<?php
require "entete.php";
?>

<!-- Barre Fixée -->
<div class="fixed top-0 left-0 w-full bg-black text-white text-center py-1 z-50">
    <h1 class="text-lg font-semibold">Junior Entreprise - ENSAE. Contactez nous au 77 514 14 23 / 77 484 14 54</h1>
</div>

<div class="mt-20">
  <!-- Navbar -->
<nav class="bg-white shadow-md">
  <div class="container mx-auto px-4 py-3 flex items-center justify-between">
    <a class="navbar-brand" href="#">
      <img src="images/logo_ensae.png" alt="Logo Junior Entreprise" class="h-14 object-cover">
    </a>
    <!--<button class="lg:hidden text-gray-600 focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>-->
    <button class="lg:hidden text-gray-600 focus:outline-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="block w-6 h-0.5 bg-gray-600 mb-2"></span>
      <span class="block w-6 h-0.5 bg-gray-600 mb-2"></span>
      <span class="block w-6 h-0.5 bg-gray-600"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse lg:flex lg:items-center" id="navbarNav">
      <ul class="flex space-x-6 lg:flex-row lg:space-x-8">
        <li class="nav-item">
          <a class="nav-link text-gray-700 hover:text-blue-600 text-blue-700" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-700 hover:text-blue-600" href="ensae_shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-gray-700 hover:text-blue-600" href="#">Répétitions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- Carrousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/img3b.jpg" style="object-fit: cover;" class="d-block w-100" alt="Image 1">
        <div class="hero-section">
          <h1 class="typewriter" data-text="Bienvenue à la Junior Entreprise"></h1>
          <p class="typewriter" data-text="Nous offrons des solutions innovantes pour booster vos compétences et vos projets."></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img4b.jpg" style="object-fit: cover;" class="d-block w-100" alt="Image 2">
        <div class="hero-section">
          <h1 class="typewriter" data-text="Innovation et Collaboration"></h1>
          <p class="typewriter" data-text="Construisez votre avenir avec nos programmes."></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img4b.jpg" style="object-fit: cover;" class="d-block w-100" alt="Image 3">
        <div class="hero-section">
          <h1 class="typewriter" data-text="Rejoignez-nous dès aujourd'hui"></h1>
          <p class="typewriter" data-text="Découvrez tout ce que nous avons à offrir."></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Features Section -->
  <div class="text-center my-4">
    <h2 class="text-4xl font-bold text-gray-700 tracking-wide">
        <span class="bg-gradient-to-r from-blue-500 to-purple-600 text-transparent bg-clip-text">
            Nos services
        </span>
    </h2>
</div>
  <div class="py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <a href="index.php">
                <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
                  
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Activités</h3>
                    <p class="text-gray-600">
                        Restez informé sur les différentes activités menées par l' entreprise.
                    </p>
                </div>
              </a>

              <a href="ensae_shop.php">
                <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 2.25h3.75l1.64 7.5m0 0h9.52m-9.52 0l1.22 5.5h8.28m0 0a2.25 2.25 0 11-2.25 2.25m2.25-2.25h-9m6.75 2.25a2.25 2.25 0 11-4.5 0" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ensae-Shop</h3>
                    <p class="text-gray-600">
                        Découvrez l'ENSAE-Shop, un espace ou vous trouverez tous les produits commercialisés par le Junior Entreprise.
                    </p>
                </div>
              </a>

              <a href="index.php">
                <div class="bg-white p-6 rounded-lg shadow-sm transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Projets</h3>
                    <p class="text-gray-600">
                        Découvrez des projets innovants réalisés par des étudiants de l'ENSAE
                    </p>
                </div>
              </a>
            </div>
        </div>
    </div>


    <!-- Section Auto-école -->
     <!-- Titre de la section -->
     <div class="text-center my-6">
      <h2 class="text-4xl font-bold text-gray-700 tracking-wide">
          <span class="bg-gradient-to-r from-blue-500 to-purple-600 text-transparent bg-clip-text">
              Notre Auto-école
          </span>
      </h2>
  <section class="py-16 bg-gray-100">
      <div class="text-center mb-12">
        <p class="text-xl text-gray-600">Apprenez à conduire avec Junior Entreprise</p>
      </div>

      <!-- Contenu principal -->
      <div class="flex flex-col md:flex-row items-center justify-between gap-8">
        
        <!-- Texte de présentation -->
        <div class="md:w-1/2 text-center md:text-left">
          <p class="text-lg text-gray-700 mb-6">
            Nous vous accompagnons tout au long de votre parcours pour obtenir votre permis de conduire avec succès. Inscrivez-vous dès maintenant et commencez votre aventure!
          </p>
          
          <!-- Détails -->
          <div class="text-lg text-gray-700 space-y-4">
            <p><strong>Date de début :</strong> 1er Mars 2025</p>
            <p><strong>Inscription :</strong> Ouverte toute l'année. <a href="#" class="text-blue-600 hover:underline">Cliquez ici</a> pour vous inscrire.</p>
          </div>
        </div>

        <!-- Image relative à l'auto-école -->
        <div class="md:w-1/2 transform transition duration-300 hover:scale-105 hover:bg-blue-30">
          <img src="images/auto_ecole2.jpeg" alt="Auto-école" class="w-full h-85 object-cover rounded-lg shadow-lg">
        </div>
      </div>
    </div>
  </section>

    <!-- Equipe -->
  <div class="text-center my-4">
    <h2 class="text-4xl font-bold text-gray-700 tracking-wide">
        <span class="bg-gradient-to-r from-blue-500 to-purple-600 text-transparent bg-clip-text">
            Notre Equipe
        </span>
    </h2>
</div>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <!--<h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Équipe</h2>-->
        <p class="text-gray-600 mb-12 max-w-2xl mx-auto">
            Découvrez les talents qui font avancer notre Junior Entreprise avec passion et engagement.
        </p>

        <div class="grid md:grid-cols-3 gap-10">
            <!-- Membre 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:bg-blue-50">
                <img src="images/img3b.jpg" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Membre 1">
                <h3 class="text-xl font-semibold text-gray-900">Mouhammadou DIA</h3>
                <p class="text-gray-600">Président</p>
                <div class="mt-4 flex justify-center space-x-3">
                    <a href="#" target="_blank" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                    <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600">
                    <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="bg-pink-500 text-white p-2 rounded-full hover:bg-pink-600">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M7 2a5 5 0 00-5 5v10a5 5 0 005 5h10a5 5 0 005-5V7a5 5 0 00-5-5H7zm10 5h.01M12 8a4 4 0 110 8 4 4 0 010-8z"></path>
                    </svg>
                    </a>
                </div>
            </div>

            <!-- Membre 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:bg-blue-50">
                <img src="images/img4b.jpg" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Membre 2">
                <h3 class="text-xl font-semibold text-gray-900">David Landry</h3>
                <p class="text-gray-600">Conseiller</p>
                <div class="mt-4 flex justify-center space-x-3">
                    <a href="#" target="_blank" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                    <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        
                    </a>
                    <a href="#" target="_blank" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600">
                    <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="bg-pink-500 text-white p-2 rounded-full hover:bg-pink-600">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M7 2a5 5 0 00-5 5v10a5 5 0 005 5h10a5 5 0 005-5V7a5 5 0 00-5-5H7zm10 5h.01M12 8a4 4 0 110 8 4 4 0 010-8z"></path>
                    </svg>
                    </a>
                </div>
            </div>

            <!-- Membre 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:bg-blue-50">
                <img src="images/img3b.jpg" class="w-32 h-32 mx-auto rounded-full mb-4" alt="Membre 3">
                <h3 class="text-xl font-semibold text-gray-900">A Nkeng Kadidja</h3>
                <p class="text-gray-600">Responsable Communication</p>
                <div class="mt-4 flex justify-center space-x-3">
                    <a href="#" class="bg-blue-600 text-white p-2 rounded-full hover:bg-blue-700">
                    <span class="sr-only">LinkedIn</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600">
                    <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.77,7.46H14.5v-1.9c0-.9.6-1.1,1-1.1h3V.5h-4.33C10.24.5,9.5,3.44,9.5,5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4Z"/>
                        </svg>
                    </a>
                    <a href="#" target="_blank" class="bg-pink-500 text-white p-2 rounded-full hover:bg-pink-600">
                    <span class="sr-only">Instagram</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M7 2a5 5 0 00-5 5v10a5 5 0 005 5h10a5 5 0 005-5V7a5 5 0 00-5-5H7zm10 5h.01M12 8a4 4 0 110 8 4 4 0 010-8z"></path>
                    </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bouton "Voir Plus" -->
        <div class="mt-12">
            <a href="index.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow-md transition duration-300 hover:bg-blue-700">
                Voir toute l'équipe
            </a>
        </div>

    </div>
</section>

  <!-- Témoignages -->
<div class="text-center my-8">
  <h2 class="text-4xl font-bold text-gray-700 tracking-wide">
    <span class="bg-gradient-to-r from-blue-500 to-purple-600 text-transparent bg-clip-text">
      Témoignages
    </span>
  </h2>
</div>

<div class="testimonials fadeInUp">
  <p class="text-center text-lg mb-6">Ce que disent nos clients à propos de nos produits et services</p>
  
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
      <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:bg-blue-50 hover: cursor-pointer">
        <p class="italic mb-4">"Une expérience incroyable qui m'a permis d'obtenir mon permis rapidement, et à un moindre coût."</p>
        <p class="font-semibold">Client Auto-école</p>
      </div>

      <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:bg-blue-50 hover: cursor-pointer">
        <p class="italic mb-4">"Une équipe formidable qui m'a aidé à faire valoir mes projets. Merci la team"</p>
        <p class="font-semibold">Client 2</p>
      </div>

      <div class="text-center bg-gray-100 p-6 rounded-lg shadow-md transform transition duration-300 hover:scale-105 hover:bg-blue-50 hover: cursor-pointer">
        <p class="italic mb-4">"La Junior Entreprise est un véritable tremplin pour l'avenir."</p>
        <p class="font-semibold">Client 3</p>
      </div>
    </div>
  </div>
</div>


<?php
require "footer.php";
?>
 