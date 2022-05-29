<h2 class="h2ListDesEtudiants"><?=$titre?></h2>

<table class="table">
  <thead class="border-5 bg-success text-white">
    <tr ">
      <th scope="col">#ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col">LOGIN</th>
      <th scope="col">MATRICULE</th>
      <th scope="col">ADRESSE</th>
      <th scope="col">CLASSE</th>
      <th scope="col">ANNEE_SCOLAIRE</th>

      <th scope="col">ACTION</th>
  <button class="btn btn-success  "><a class="dropdown-item text-white " href="/InscriptionEtudiant">Ajouter Etudiant</a></button>

    </tr>
  </thead>
  <tbody>
  <?php

    $i = 1;
    foreach ($AC as $p){?>
        <tr class="text-white"  >        
        
            <td><?=$i++?></td>
            <td><?=$p->nom_complet?></td> 
            <td><?=$p->role?></td> 
            <td><?=$p->login?></td> 
            <td><?=$p->matricule?></td> 
            <td><?=$p->adresse?></td> 
     


            <td>
            <a href="/Etudiant/<?=$p->id_personne?>" class="btn btn-secondary btn-">detail</a>
              <a href="/Etudiant/<?=$p->id_personne?>" class="btn btn-primary btn-">modifier</a>
              <a href="/Etudiant/<?=$p->id_personne?>" class="btn btn-danger btn-">supprimer</a>
            </td>

            <!-- <td><button class="btn btn-primary btn-">modifier</button></td>
            <td><button class="btn btn-danger btn-">supprimer</button></td> -->
             

        </tr>     
  <?php  }
?>
  </tbody>
</table>