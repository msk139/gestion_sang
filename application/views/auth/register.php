<style>
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>
<form action="<?php echo base_url('Auth/Register/registerNow')?>" method="POST" autocomplete="off">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="<?php echo base_url('assets/plugins/images/register.webp')?>"
                alt="Sample photo" class="img-fluid h-100"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">INSCRIPTION</h3>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" >Nom</label>
                      <input type="text" placeholder="Goita" name='name' class="form-control form-control-lg" />
                      <small><?php echo form_error("name"); ?></small>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" >Prénom</label>
                      <input type="text" placeholder="Assimi"  name='username' class="form-control form-control-lg" />
                      <small><?php echo form_error("username"); ?></small>

                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" >Address Email</label>
                  <input type="email" placeholder="exemple@exemple.com" name='email' class="form-control form-control-lg" />
                  <small><?php echo form_error("email"); ?></small>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label ">Mot de passe</label>
                  <input type="password" placeholder="*********" name='password' class="form-control form-control-lg" />
                  <small><?php echo form_error("password"); ?></small>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label"  for="comfirmepsd">Confirmation</label>
                  <input type="password" placeholder="*********" name='confirmation' class="form-control form-control-lg" />
                  <small><?php echo form_error("confirmation"); ?></small>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label">Téléphone</label>
                  <input type="text"  placeholder="66778899" name='tel' class="form-control form-control-lg" />
                  <small><?php echo form_error("tel"); ?></small>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" >Localité</label>
                  <input type="text"  placeholder="Hippodrome" name='localite' class="form-control form-control-lg" />
                  <small><?php echo form_error("localite"); ?></small>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                  <div class="form-outline">
                          <label for="groupe_sanguin">Groupe Sanguin</label>
                          <select class="form-control form-control-lg" id="exampleInputgroupesanguin" name="groupe_sanguin">
                            <small><?php echo form_error("groupe_sanguin"); ?></small>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option>
                          </select>
                        </div>
                  </div>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Annuler</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Enregistrer</button>
                </div>
              <?php
              if($this->session->flashdata('success' )) { ?>
              <p class="text-success text-center"><?= $this->session->flashdata('success')?></p>
              <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
  </section>