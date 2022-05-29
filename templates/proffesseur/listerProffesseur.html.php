<div class="<?=hiden(['ROLE_ETUDIANT'])?>">

<h2 class="h2ListDesPersonne "><?=$titre?></h2>
<table class="table">
  <thead class="border-5 bg-success text-white">
    <tr class="border-5 text-white">
      <th scope="col">ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col" >GRADE</th>
      <th scope="col" class="text-center">ACTION</th>      
  <button class="btn btn-success  "><a class="dropdown-item text-white " href="/addProffesseur">Ajouter Proffesseur</a></button>

    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($proffesseur as $p){?>
        <tr class="border-5 text-white  ">        
            <td ><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
            <td><?=$p->role?></td>  
            <td><?=$p->grade?></td>    
            <td >
              <a href="/detail/<?=$p->id_personne?>" class="btn btn-secondary ">detail</a>
              <a href="/modifier/<?=$p->id_personne?>" class="btn btn-primary ">modifier</a>
              <a href="/supprimer/<?=$p->id_personne?>" class="btn btn-danger ">supprimer</a>
      
          </td>
        </tr>     
  <?php  }
?>
  </tbody>
</table>
</div>