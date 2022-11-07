<section class="h-100 bg-dark">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="<?= base_url('assets/plugins/images/login.webp'); ?>" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post" autocomplete="off" action="<?= base_url('Auth/Admin/adminnow') ?>">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: red;"></i>
                                        <span class="h1 fw-bold mb-0">Bank de sang</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
                                    <div class="form-outline mb-4">
                                        <label for="exampleInputEmail1" class="form-label">Address Email</label>
                                        <input type="email" placeholder="Address Email " name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                                        <input type="password" name="password" placeholder="" class="form-control" id="exampleInputPassword1">
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Connexion</button>
                                    </div>
                                    <?php
                                    if ($this->session->flashdata('error')) {    ?>
                                        <p class="text-danger text-center" style="margin-top: 10px;"> <?= $this->session->flashdata('error') ?></p>
                                    <?php } ?>

                                    <a class="small text-muted" href="#!">Mot de passe oublié ?</a>
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous n'avez pas de compte? <a href="<?= base_url("register") ?>" style="color: #393f81;">Inscription</a></p>
                                    <a href="#" class="small text-muted">Terms of use.</a>
                                    <a href="#" class="small text-muted">Privacy policy</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>