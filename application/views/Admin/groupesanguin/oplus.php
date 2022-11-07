<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Liste des agents</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">nom_agent</th>
                                            <th class="border-top-0">prenom_agent</th>
                                            <th class="border-top-0">email_agent</th>
                                            <th class="border-top-0">password_agent</th>
                                            <th class="border-top-0">profession_agent</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1;  ?>
                                           <?php foreach ($agent_de_sante as $row) {?>
                                            <tr>
                                                <th  scope="row"><?php echo $i++;?></th>
                                                <td><?php echo $row->nom_agent; ?></td>
                                                <td><?php echo $row->prenom_agent; ?></td>
                                                <td><?php echo $row->email_agent; ?></td>
                                                <td><?php echo $row->password_agent; ?></td>
                                                <td><?php echo $row->profession_agent; ?></td>
                                                <td class="btn btn-success"> <a href="<?php echo base_url('Admin/edit');?>/<?php echo $row->id_agent;?>">Modifier</td>
                                                <td class="btn btn-danger"> <a href="<?php echo base_url('Admin/delete');?>/<?php echo $row->id_agent;?>">Supprimer</td>

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
           