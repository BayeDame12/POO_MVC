<h2 class="h2ListDesPersonne"><?=$titre?></h2>
<table class="table">
  <thead class="border-5 bg-success ">
    <tr class="border-5">
      <th scope="col">ID</th>
      <th scope="col">NOM_COMPLET</th>
      <th scope="col">ROLE</th>
      <th scope="col" >LOGIN</th>
      <th scope="col" class="text-center">ACTION</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $i = 1;
    foreach ($personne as $p){?>
        <tr class="border-5 ">        
            <td ><?=$i++?></td>
            <td><?=$p->nom_complet?></td>  
            <td><?=$p->role?></td>  
            <td><?=$p->login?></td>  
            <td>
              <button class="btn btn-primary offset-3  btn-">modifier</button>
              <button class="btn btn-danger  offset-3 btn-">supprimer</button>
          
          </td>

        </tr>     
  <?php  }
?>
  </tbody>
</table>