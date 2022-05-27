<div class="<?=hiden(['ROLE_ETUDIANT'])?>">
<h2 class="h2ListDesAC"><?=$titre?></h2>
<table class="table">
  <thead class="border-5 bg-secondary ">
    <tr class="border-5">
         <th scope="col">ID</th>
         <th scope="col">NOM_COMPLET</th>
         <th scope="col">LOGIN</th>
         <th scope="col" class="text-center">ACTION</th>      
  <button class="btn btn-success  "><a class="dropdown-item text-white " href="/addAC">Ajouter AC</a></button>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($RP as $p){?>
        <tr class="border-5 ">        
            <td ><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
            <td><?=$p->login?></td>  
            
            <td>
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