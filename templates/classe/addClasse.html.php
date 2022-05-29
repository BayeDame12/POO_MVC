


<section class="75" style="background-color: #6668768E;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block ">
              <img  src="<?=$Constantes::WEB_ROOT."images/HTDKH.png"?>"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">

              <div class="card-body p-4 p-lg-5 text-white ">
              

                <form action="/addClasse" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h3 fw-bold mb-0 offset-3">AJOUTER CLASSE</span>
                  </div>
                
                  <div class="col-12">

                  <div class="form-outline mb-5">
                    <label class="form-label" for="form2Example17">Filiere</label>
                    <input type="text" id="form2Example17" name="filiere" placeholder="veiller saisir votre une filiere" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17"> Niveau</label>
                    <input type="text" id="form2Example17" name="niveau" placeholder="veiller saisir votre Niveau" class="form-control form-control-lg" />
                  </div>
                  <!-- <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">libelle</label>
                    <input type="text" id="form2Example27"name="libelle" placeholder="veiller saisir un libelle" class="form-control form-control-lg" />
                  </div> -->
                  </div>     
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block offset-4" type="submit">Ajouter Classe</button>
                  </div>
                  </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>