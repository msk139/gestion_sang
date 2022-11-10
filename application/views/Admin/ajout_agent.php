
<!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="margin-left:240px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
<div class="container-fluid">
              
<div class="container-fluid">
              

                
              <!--Ajout d'un nouvel agent-->
             <div class="row">
                     <div class="">
                 </div>
                 <div class="form-group mb-4 ">
                                     <div class="col-sm-12">
                                         <a href="index" class="btn btn-danger" type="submit">Retour</a>
                                     </div>
           
                 <div class=" col-lg-8 col-xlg-9 col-md-12 text-right">
                     <div class="card">
                                <?php if($this->session->flashdata('error')){   ?>
                                          <div class="alert alert-success">

                                            <?php echo $this->session->flashdata('error'); ?>
                                         </div>

                                <?php }?>
                         <div class="card-body">
                             <form class="form-horizontal form-material" action="<?php echo base_url('Admin/ajout')?>" method="post">
                             <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

                                 <div class="form-group mb-4 ">
                                     <label class="col-md-12 p-0">Nom</label>
                                     <h5 style="color:red"><?php echo form_error("nom_agent"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text" name="nom_agent" placeholder="Entrez votre nom Svp!" required
                                             class="form-control p-0 border-0">   </div>
                                 </div>
                                 <div class="form-group mb-4">
                                     <label class="col-md-12 p-0">Prénom</label>
                                     <h5 style="color:red"><?php echo form_error("prenom_agent"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text" name="prenom_agent" placeholder="Entrez votre prénom Svp!" required
                                             class="form-control p-0 border-0">  </div>
                                 </div>
                                 <div class="form-group mb-4">
                                     <label for="example-email" class="col-md-12 p-0">Mail</label>
                                     <h5 style="color:red"><?php echo form_error("email_agent"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text"  name="email_agent" placeholder="Entrez votre mail Svp!" required
                                             class="form-control p-0 border-0" >                                         
                                     </div>
                                 </div>
                                 <div class="form-group mb-4">
                                     <label class="col-md-12 p-0">Mot de passe</label>
                                     <h5 style="color:red"><?php echo form_error("password_agent"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="password" placeholder="Entrez votre mot de passe Svp!"  name="password_agent" required class="form-control p-0 border-0" >
                                     </div>                                       
                                 </div>
                                 <div class="form-group mb-4">
                                     <label class="col-md-12 p-0">Confirmer mot de passe</label>
                                     <h5 style="color:red"><?php echo form_error("confirm_password"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="password" placeholder="Confirmez votre mot de passe Svp!"  name="confirm_password" required class="form-control p-0 border-0" >
                                     </div>                                       
                                 </div>
                                 <div class="form-group mb-4">
                                     <label class="col-md-12 p-0">Profession</label>
                                     <h5 style="color:red"><?php echo form_error("profession_agent"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text" placeholder="Entrez votre profession Svp!"  name="profession_agent" required  class="form-control p-0 border-0" >
                                     </div>
                                 </div>
                                <div class="form-group mb-4 text-center">
                                     <div class="col-sm-12">
                                         <button class="btn btn-success" type="submit">Ajouter</button>
                                     </div>
                                    
                                 
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
            
                 <!-- Column -->
         </div>
        