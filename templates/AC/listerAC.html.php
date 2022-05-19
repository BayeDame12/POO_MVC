<h2 class="h2ListDesPersonne"><?=$titre?></h2>


<table class="table">
  <thead>
    <tr >
      <th scope="col">ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col">LOGIN</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $i = 1;
    foreach ($personne as $p){?>
        <tr>        
            <td><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
            <td><?=$p->role?></td>  
            <td><?=$p->login?></td>  
            <td><button class="btn btn-primary btn-">ajouter</button></td>
            <td><button class="btn btn-danger btn-">supprimer</button></td>

        </tr>     
  <?php  }
?>
  </tbody>
</table>