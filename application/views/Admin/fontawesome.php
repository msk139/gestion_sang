<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <!-- ============================================================== -->
     <div class="page-wrapper" style="margin-left:240px;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Groupe Sanguin</h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="container">
    <br>
    <br>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
        </button>
        
    <br>
    <br>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url('Groups_sang/create')?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Groupe Sanguin</label>
                        <div class="form-group col-md-4">
                                
                                <select name="nom_rhesus" id="exampleModalLabel" class="form-control">
                                    <option selected>Choisir Goupe</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>
                                    <option value="B-">B-</option>
                                    <option value="A-">A-</option>
                                </select>
                                </div>
                        <!--<input type="text"  class="form-control" name="nom_rhesus" aria-describedby="emailHelp" placeholder="Entrer Goupe Sanguin">-->
                    </div>
                    <button type="submit" class="btn btn-primary" value="save">Submit</button>
                </form>
            </div>
            </div>
        </div>
        </div>


        <!--<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Goupe Sanguin</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; ?>
                <?php foreach($result as $row) {?>
                <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $row->nom_rhesus; ?></td>
                <td><a href="<?php echo base_url('Groups_sang/edit');?>/<?php echo $row->id_groupe_sanguin;?>"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-edit"></i></div></td> 
                
                <td><a href="<?php echo base_url('Groups_sang/delete');?>/<?php echo $row->id_groupe_sanguin;?>"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-trash"></i></div></td> 
                </tr>
                <?php } ?>
                                           <?php if($this->session->flashdata('error')){   ?>
                                                <div class="alert alert-success">

                                                <?php echo $this->session->flashdata('error'); ?>
                                                </div>
                <?php } ?>
            </tbody>
        </table>
    </div>

  </div>-->
            
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
           
                   <!--Liste des groupes sanguin-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <div class="form-group mb-4 text-center">
                            <h3 class="box-title">Liste des groupe sanguin</h3><div class="col-sm-12">
                                        </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Groupe sanguin</th>     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;  ?>
                                        <?php foreach($result as $row) {?>
                                            <tr>
                                                <th  scope="row"><?php echo $i++;?></th>
                                                <td><?php echo $row->nom_rhesus; ?></td>
                                               <td class="btn btn-success"> <a href="<?php echo base_url('Groups_sang/edit');?>/<?php echo $row->id_groupe_sanguin;?>"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-edit"></i></div></td>  
                                                <td class="btn btn-danger"> <a href="<?php echo base_url('Groups_sang/delete');?>/<?php echo $row->id_groupe_sanguin;?>" onclick="return confirm('Etes vous sûr de vouloir supprimer ce groupe sanguin?')"><div class="col-sm-6 col-md-6 col-lg-3 f-icon"><i class="fas fa-trash"></i></div></td>

                                           </tr>
                                           <?php } ?>
                                           <?php if($this->session->flashdata('error')){   ?>
                                                <div class="alert alert-success">

                                                <?php echo $this->session->flashdata('error'); ?>
                                                </div>

                                            <?php }?> 
                                    </tbody>               
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
               
</div>     
            </div>
           
   