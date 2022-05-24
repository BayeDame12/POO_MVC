<form action="/addProffesseur" method="POST">
<?php
if(isset($insert) && $insert==1) {

    echo '<div class="alert alert-success">Ajouter avec succees</div>';
}

?>

<div class="d-flex align-items-center mb-3 pb-1">
  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
  <span class="h1 fw-bold mb-0 offset-3">AJOUTER PROFFESSEUR</span>
</div>
 <!-- <h2 class="alert alert-danger">CONNECTER VOUS D ABORD</h2> -->
<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

<div class="form-outline mb-4">
  <label class="form-label" for="form2Example17">NOM </label>
  <input type="text" id="form2Example17" name="nom" placeholder="NOM" class="form-control form-control-lg" />
</div>

<div class="form-outline mb-4"></div>
  <label class="form-label" for="form2Example17">GRADE </label>
  <select name="grade" class="form-select">
  <option value="0">Selectioner Grade</option>
    <option value="Docteur">Docteur</option>
    <option value="Ingenieur">Ingenieur</option>
    <option value="Technicien">Technicien</option>


  </select>
</div>

<div class="pt-1 mb-4">
  <button class="btn btn-dark btn-lg btn-block offset-4" type="submit">AJOUTER</button>
</div>
</form>