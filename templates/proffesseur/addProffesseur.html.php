<form action="/addProffesseur" method="POST">
<?php
if(isset($insert) && $insert==1) {

    echo '<div class="alert alert-success">Ajouter avec succees</div>';
}

?>

<!-- <h2 class="alert alert-danger">CONNECTER VOUS D ABORD</h2> -->
<div class="container-fluid col-4 bg-secondary w-50">
  <div class="d-flex align-items-center mt-4 pb-1 ">
      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
      <span class="h4 fw-bold mb-0 offset-3 text-dark"><?= isset($prof->id_personne) ? "Modifier" : "AJOUTER" ?>  PROFFESSEUR</span>
      
    </div>
  
<h5 class="fw-normal mb-3 pb-3 text-dark" style="letter-spacing: 1px;">Sign into your account</h5>

<div class="form-outline mb-4 text-dark ">
  <label class="form-label" for="form2Example17 text-white">NOM </label>
  <input type="text" id="form2Example17" name="nom" placeholder="NOM" class="form-control form-control-lg" value="<?= isset($prof->id_personne) ? $prof->nom_complet : "" ?> " />
  <input type="hidden" name="todo" value="<?=isset($prof->id_personne) ? "modifier" : ""?>"  />
  <input type="hidden" name="id_personne" value="<?=isset($prof->id_personne) ? $prof->id_personne : ""?>"  />
</div>

<div class="form-outline mb-4 text-dark ">
  <label class="form-label" for="form2Example17 text-dark">GRADE </label>
  <select name="grade" class="form-select text-white" value="<?= $prof->grade ?>" >
  <option value="0">Selectioner Grade</option>
    <option value="Docteur">Docteur</option>
    <option value="Ingenieur">Ingenieur</option>
    <option value="Technicien">Technicien</option>


  </select>
</div>



<div class="pt-1 mb-4">
  <button class="btn btn-dark btn-lg btn-block offset-4 fw-bold  border btn-lg btn-block" type="submit">AJOUTER PROFFESSEUR</button>
</div>
</div>
</form>