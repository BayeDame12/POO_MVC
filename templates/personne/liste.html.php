<h2 class="h2ListDesPersonne"><?=$titre?></h2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 1;
    foreach ($personne as $p){?>
        <tr>        
            <td><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
        </tr>     
  <?php  }
?>
  </tbody>
</table>