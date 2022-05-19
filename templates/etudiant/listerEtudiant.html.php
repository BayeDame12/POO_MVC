<h2 class="h2ListDesEtudiants"><?=$titre?></h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
     
    </tr>
  </thead>
  <tbody>
  <?php

    $i = 1;
    foreach ($etudiant as $p){?>
        <tr>        
          <!-- <?=var_dump($p)?> -->
            <td><?=$i++?></td>
            <td><?=$p->nom_complet?></td> 
            <td><?=$p->role?></td>  
             

        </tr>     
  <?php  }
?>
  </tbody>
</table>