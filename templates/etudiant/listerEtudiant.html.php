<h2 class="h2ListDesEtudiants"><?=$titre?></h2>

<table class="table">
  <thead class="border-5 bg-success ">
    <tr ">
      <th scope="col">#ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php

    $i = 1;
    foreach ($etudiant as $p){?>
        <tr>        
        
            <td><?=$i++?></td>
            <td><?=$p->nom_complet?></td> 
            <td><?=$p->role?></td> 
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