<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ENSAE-Shop | Junior Entreprise</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- En-tête de la page -->
  <header class="bg-blue-600 text-white text-center py-6">
    <h1 class="text-4xl font-bold">Bienvenue sur ENSAE-Shop</h1>
    <p class="text-lg mt-2">Découvrez nos produits et services de qualité, conçus par nos étudiants.</p>
  </header>

  <!-- Section d'introduction à la boutique -->
  <section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold text-gray-800">Explorez notre boutique</h2>
      <p class="text-lg text-gray-600 mt-4 mb-8">
        Nous vous proposons une gamme de produits créés et gérés par les étudiants de la Junior Entreprise. Que vous soyez à la recherche de services professionnels ou de produits uniques, vous êtes au bon endroit !
      </p>
    </div>
  </section>

  <!-- Section des produits -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- Carte produit 1 -->
        <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
          <img src="images/polo.jpeg" alt="Produit 1" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800">Polos</h3>
            <p class="text-gray-600 mt-2">Découvrez les polos de l'ENSAE, 100% coton.</p>
            <p class="text-xl font-bold text-blue-600 mt-4">FCFA 5 000.00</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4 hover:bg-blue-700">Acheter</button>
          </div>
        </div>

        <!-- Carte produit 2 -->
        <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
          <img src="images/maillot.jpeg" alt="Produit 2" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800">Maillot</h3>
            <p class="text-gray-600 mt-2">Profitez de l'offre exceptionnelle sur les maillots ENSAE.</p>
            <p class="text-xl font-bold text-blue-600 mt-4">FCFA 4 000.00</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4 hover:bg-blue-700">Acheter</button>
          </div>
        </div>

        <!-- Carte produit 3 -->
        <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
          <img src="images/costume.jpeg" alt="Produit 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800">Costume</h3>
            <p class="text-gray-600 mt-2">Costume complet toute couleur disponible.</p>
            <p class="text-xl font-bold text-blue-600 mt-4">FCFA 15 000.00</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4 hover:bg-blue-700">Acheter</button>
          </div>
        </div>

        <!-- Carte produit 4 -->
        <div class="bg-gray-200 rounded-lg shadow-md overflow-hidden transform transition duration-300 ease-in-out hover:scale-105 hover:bg-blue-50">
          <img src="images/costume2.jpeg" alt="Produit 4" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold text-gray-800">Costume</h3>
            <p class="text-gray-600 mt-2">Habillez vous avec élégance à moindre coût.</p>
            <p class="text-xl font-bold text-blue-600 mt-4">FCFA 10 000.00</p>
            <button class="bg-blue-600 text-white py-2 px-4 rounded mt-4 hover:bg-blue-700">Acheter</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section des promotions -->
  <section class="py-12 bg-blue-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold text-gray-800">Offres et Promotions</h2>
      <p class="text-lg text-gray-600 mt-4 mb-8 ">
        Profitez de nos promotions limitées et de nos offres spéciales pour économiser sur vos achats.
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:scale-105 hover:cursor-pointer">
          <h3 class="text-xl font-semibold">Offre Spéciale 1</h3>
          <p class="mt-2">10% de réduction sur tous les polos jusqu'au 31 Mars.</p>
        </div>
        <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:scale-105 hover:cursor-pointer">
          <h3 class="text-xl font-semibold">Offre Spéciale 2</h3>
          <p class="mt-2">Achetez 5 produit, et le second à moitié prix !</p>
        </div>
        <div class="bg-blue-600 text-white p-6 rounded-lg shadow-md transform transition duration-300 ease-in-out hover:scale-105 hover:cursor-pointer">
          <h3 class="text-xl font-semibold">Offre Spéciale 3</h3>
          <p class="mt-2">Livraison gratuite sur toutes les commandes supérieures à 10 000 FCFA.</p>
        </div>
      </div>
    </div>
  </section>

<?php
require 'footer.php';
?>