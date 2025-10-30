<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Efrei</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="view/styles/styles.css">
</head>
<body>

  <header class="navbar navbar-expand-lg fixed-top glassy-header px-4 py-3">
    <div class="container d-flex justify-content-between align-items-center">
      
      <!-- Logo + Nom -->
      <a class="navbar-brand d-flex align-items-center" href="#">
        <div class="logo-wrapper me-2">
          <img src="view/image/Logo_Efrei.png" alt="Logo Efrei" class="logo">
        </div>
        <span class="fw-bold fs-4 text-light">Efrei</span>
      </a>

      <!-- Bouton toggler mobile -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
              aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation -->
      <div class="collapse navbar-collapse justify-content-end" id="nav">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=eleves">Étudiants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=matieres">Matières</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <div style="padding-top:140px;"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    window.addEventListener('scroll', function() {
      const header = document.querySelector('.glassy-header');
      if (window.scrollY > 20) header.classList.add('scrolled');
      else header.classList.remove('scrolled');
    });
  </script>
</body>
</html>
