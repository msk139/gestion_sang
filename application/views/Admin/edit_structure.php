
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
                        <h4 class="page-title">Modifier</h4>
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
              <!--Ajout d'une nouvelle structure-->
             <div class="row">
                     <div class="">
                 </div>

                                   <?php if($this->session->flashdata('error')){   ?>
                                          <div class="alert alert-success">

                                            <?php echo $this->session->flashdata('error'); ?>
                                           </div>

                                       <?php }?>
                 <?php extract($edit);?>
                 <div class=" col-lg-8 col-xlg-9 col-md-12 text-right">
                     <div class="card">
                     
                         <div class="card-body">
                             <form class="form-horizontal form-material" action="<?php echo base_url('Structure/update/'.$id_structure);?>" method="post">
                             <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

                                 <div class="form-group mb-4 ">
                                     <label class="col-md-12 p-0">Nom</label>
                                     <h5 style="color:red"><?php echo form_error("nom_structure"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text" name="nom_structure" value="<?php echo $nom_structure;?>" required
                                             class="form-control p-0 border-0">   </div>
                                 </div>
                                 <div class="form-group mb-4">
                                     <label class="col-md-12 p-0">Lieu</label>
                                     <h5 style="color:red"><?php echo form_error("lieu_structure"); ?></h5>
                                     <div class="col-md-12 border-bottom p-0">
                                         <input type="text" name="lieu_structure" value="<?php echo $lieu_structure;?>" required
                                             class="form-control p-0 border-0">  </div>
                                 </div>
                                <div class="form-group mb-4 text-center">
                                     <div class="col-sm-12">
                                         <button class="btn btn-success" type="submit">Modifier</button>
                                     </div>
                                 
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
            
                 <!-- Column -->
         </div>
