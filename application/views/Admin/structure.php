 

         
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
                        <h4 class="page-title">Structure</h4>
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
           
                   <!--Liste des agents-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="form-group mb-4 text-center">
                            <h3 class="box-title">Liste des agents</h3><div class="col-sm-12">
                                            <a href="<?php echo base_url('Structure/ajout_structure');?>" class="btn btn-success" class=pull-right  type="submit">Ajouter </a>
                                        </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">nom_structure</th>
                                            <th class="border-top-0">lieu_structure</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;  ?>
                                           <?php foreach ($structure_de_sante as $row) {?>
                                            <tr>
                                                <th  scope="row"><?php echo $i++;?></th>
                                                <td><?php echo $row->nom_structure; ?></td>
                                                <td><?php echo $row->lieu_structure; ?></td>                       
                                                <td class="btn btn-success"> <a href="<?php echo base_url('Structure/edit');?>/<?php echo $row->id_structure;?>"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-edit"></i></div></td>
                                                <?php if($this->session->flashdata('error')){   ?>
                                                         <div class="alert alert-success">

                                                            <?php echo $this->session->flashdata('error'); ?>
                                                         </div>

                                                <?php }?>
                                                <td class="btn btn-danger"> <a href="<?php echo base_url('Structure/delete');?>/<?php echo $row->id_structure;?>"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-trash"></i></div></td>

                                           </tr>
                                           <?php } ?>
                                            
                                    </tbody>               
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
               
</div>     
            </div>
           
   

         
  
    