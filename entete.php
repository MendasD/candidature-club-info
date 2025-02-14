<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junior Entreprise - Accueil</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  <style>
    /*.navbar {
      background-color: #343a40;
      top: 0;
      /*position: fixed;
    }
    .navbar-brand img {
      height: 50px;
    }*/
    .carousel-item {
      position: relative;
    }
    .hero-section {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
    .hero-section h1, .hero-section p {
      overflow: hidden; /* Ensures content doesn't overflow while typing */
      white-space: nowrap; /* Prevents wrapping */
      border-right: 3px solid white; /* Cursor effect */
      animation: blink 0.8s step-end infinite;
    }
    .hero-section h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .hero-section p {
      font-size: 1.2rem;
    }
    @keyframes blink {
      from, to {
        border-color: transparent;
      }
      50% {
        border-color: white;
      }
    }
    .testimonials {
      background-color: #e9ecef;
      padding: 40px 20px;
    }
    .testimonials h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .footer {
      background-color: #343a40;
      color: white;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>