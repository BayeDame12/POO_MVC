<form action="/addAC" method="POST">
<?php
if(isset($insert) && $insert==1) {

    echo '<div class="alert alert-success">Ajouter avec succees</div>';
}

?>
<div class="container-fluid col-4 bg-secondary mt-3 text-dark ">

<div class="d-flex align-items-center  pb-1">
  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
  <span class="h1 fw-bold mb-0 offset-3 text-dark">AJOUTER AC</span>
  
</div>
 <!-- <h2 class="alert alert-danger">CONNECTER VOUS D ABORD</h2> -->
<h5 class="fw-normal  pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

<div class="form-outline mb-4 text-secondary">
  <label class="form-label" for="form2Example17">NOM_COMPLET </label>
  <input type="text" id="form2Example17" name="nom" placeholder="veiller sair le nom complet de l attache" class="form-control form-control-lg" />
</div>
<div class="form-outline mb-4">
  <label class="form-label" for="form2Example17">LOGIN </label>
  <input type="text" id="form2Example17" name="login" placeholder="veiller sair le login " class="form-control form-control-lg" />
</div>
<div class="form-outline mb-4">
  <label class="form-label" for="form2Example17">PASSWORD </label>
  <input type="password" id="form2Example17" name="password" placeholder="veiller sair le mot de passe" class="form-control form-control-lg" />
</div>

<div class="pt-1 mb-4">
  <button class="btn btn-dark btn-lg btn-block offset-4" type="submit">AJOUTER AC</button>
</div>
</form>
</div>