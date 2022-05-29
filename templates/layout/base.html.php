
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIENVENUE SUR MA PAGE DE CONNEXION</title>
        <link href="<?=$Constantes::WEB_ROOT.'css/bootstrap1.css'?>" rel="stylesheet">  
        <link href="<?=$Constantes::WEB_ROOT.'CSS/Style.css'?>" rel="stylesheet">  
        <link href="<?=$Constantes::WEB_ROOT.'css/js.css'?>" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg bg-secondary <?= showNav()?>">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item dropdown text-white <?=hiden(['ROLE_ETUDIANT'])?> <?=hiden(['ROLE_AC'])?>">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            AC
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="/listerAC">Lister AC</a></li>
            <li><a class="dropdown-item text-white" href="/addAC">Ajouter AC </a></li>
            
          </ul>
        </li>

        <li class="nav-item dropdown <?=hiden(['ROLE_ETUDIANT'])?> <?=hiden(['ROLE_AC'])?>">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CLASS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="/listerClasse">Lister Classe</a></li>
            <li><a class="dropdown-item text-white" href="/addClasse">Ajouter Classe </a></li>
            
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DEMANDE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="#">Lister Demande</a></li>
            <li><a class="dropdown-item text-white" href="#">Faire Une Demande </a></li>
            <li><a class="dropdown-item text-white" href="#">Annuler Demande</a></li>
            <li><a class="dropdown-item text-white" href="#">Suspention Demande</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown <?=hiden(['ROLE_ETUDIANT'])?> <?=hiden(['ROLE_AC'])?>">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MODULE
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="/addModule">Ajouter Module</a></li>
            <li><a class="dropdown-item text-white" href="/listerModule">lister Module</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown <?=hiden(['ROLE_ETUDIANT','ROLE_RP'])?>">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            INSCRIPTION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          
            <li><a class="dropdown-item text-white" href="/listerEtudiant ">Liste Etudiant</a></li>
            <li><a class="dropdown-item text-white" href="/InscriptionEtudiant ">InscriptionEtudiant</a></li>
            <li><a class="dropdown-item text-white" href="/AnnulerInscription">Annuler Inscription</a></li>
          
          </ul>
        </li>
        <li class="nav-item dropdown <?=hiden(['ROLE_ETUDIANT'])?> <?=hiden(['ROLE_AC'])?>">
          <a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PROFFESEUR
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-white" href="/addProffesseur">Ajouter Proffesseur</a></li>
            <li><a class="dropdown-item text-white " href="/listerProffesseur">Lister Proffesseur</a></li>
            
          </ul>
        </li>
       
      </ul>
      <button class="btn btn-light" type="submit">
        <a class="nav-link fw-bold mb-0 border  text-blaxk" aria-current="page" href="logout">DECONNEXION</a>
      </button>
     
    </div>
  </div>
</nav>

    <?=$content_for_views?>
        
       <script src="<?=$Constantes::WEB_ROOT.'js/script.js'?>"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>



    </body>
</html>