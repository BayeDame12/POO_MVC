<div class="<?=hiden(['ROLE_ETUDIANT'])?>">

<h2 class="h2ListDesPersonne"><?=$titre?></h2>
<table class="table">
  <thead class="border-5 bg-success ">
    <tr class="border-5">
      <th scope="col">ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col" >GRADE</th>
      <th scope="col" class="text-center">ACTION</th>      
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach ($proffesseur as $p){?>
        <tr class="border-5 ">        
            <td ><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
            <td><?=$p->role?></td>  
            <td><?=$p->grade?></td>    
            <td>
              <a href="/Proffesseur/<?=$p->id_personne?>" class="btn btn-secondary   btn-">detail</a>
              <button class="btn btn-primary   btn-">modifier</button>

              <button class="btn btn-danger  btn-">supprimer</button>         
          </td>

        </tr>     
  <?php  }
?>
  </tbody>
</table>
</div>