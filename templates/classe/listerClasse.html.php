<h2 class="h2ListDesClasse"><?=$titre?></h2>

<table class="table">
  <thead class="border-5 bg-secondary text-white">
    <tr ">
      <th scope="col">#ID</th>
      <th scope="col">FILLIERE</th>
      <th scope="col">NIVEAU</th>
      <th scope="col">LIBELLE</th>
      <th scope="col">ACTION</th>
      <button class="btn btn-success  "><a class="dropdown-item text-white " href="/addClasse">Ajouter Classe</a></button>

    </tr>
  </thead>
  <tbody>
  <?php

    $i = 1;
    foreach ($classe as $p){?>
        <tr class="text-white">        
        
            <td><?=$i++?></td>
            <td><?=$p->filiere?></td> 
            <td><?=$p->niveau?></td> 
            <td><?=$p->libelle?></td> 

            <td>
             <a href="/classe/<?=$p->id_classe?>" class="btn btn-secondary btn-">detail</a>
              <a href="/classe/<?=$p->id_classe?>" class="btn btn-primary btn-">modifier</a>
              <a href="/classe/<?=$p->id_classe?>" class="btn btn-danger btn-">supprimer</a>
            </td>
        </tr>     
  <?php  }
?>
  </tbody>
</table>