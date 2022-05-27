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

              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/InscriptionEtudiant" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h3 fw-bold mb-0 offset-3">S'INSCRIPTION ETUDIANT</span>
                  </div>
                
                  <div class="col-12">

                  <div class="form-outline mb-5">
                    <label class="form-label" for="form2Example17"> Nom complet</label>
                    <input type="text" id="form2Example17" name="nomComplet" placeholder="veiller saisir votre Nom complet" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" id="form2Example17" name="login" placeholder="veiller saisir votre email" class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27"name="password" placeholder="veiller saisir votre mot de passe" class="form-control form-control-lg" />
                  </div>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">matricule</label>
                    <input type="text" id="form2Example17" name="matricule" placeholder="veiller saisir votre matricule" class="form-control form-control-lg" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">adresse</label>
                    <input type="text" id="form2Example27"name="adresse" placeholder="veiller saisir votre adesse" class="form-control " />
                  </div>
                  <div class="input-group d-flex">


                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Sexe</label>
                  <!-- </div> -->
                  <div class="input-group d-flex"></div>

                  <label class="form-label" for="form2Example17">Sexe</label>        
                  <label class="radio-container m-r-45">Male
                  <input type="radio" checked="checked" value="M" name="sexe">
                  <span class="checkmark"></span>
                  </label>
                  <label class="radio-container">Female
                  <input type="radio" value="F" name="sexe">
                  <span class="checkmark"></span>
                  </label>
                  
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block offset-4" type="submit">S'inscrir</button>
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