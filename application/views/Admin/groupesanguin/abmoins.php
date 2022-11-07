<div class="page-wrapper" style="margin-left:240px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Liste des Groupes Sanguin</h4>
            </div>
        </div>
    </div>
     <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Categorie AB-</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">ID</th>
                                    <th class="border-top-0">Nom</th>
                                    <th class="border-top-0">Prénom</th>
                                    <th class="border-top-0">Email</th>
                                    <th class="border-top-0">Téléphone</th>
                                    <th class="border-top-0">Localité</th>
                                    <th class="border-top-0">Groupe Sanguin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;  ?>
                                <?php foreach ($users as $row) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++; ?></th>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->tel; ?></td>
                                        <td><?php echo $row->localite; ?></td>
                                        <td><?php echo $row->groupe_sanguin; ?></td>
                                        <td class="btn btn-success"> <a href="<?php echo base_url('Groupesanguin/edit'); ?>/<?php echo $row->id; ?>">Modifier</td>
                                        <td class="btn btn-danger"> <a href="<?php echo base_url('Groupesanguin/delete'); ?>/<?php echo $row->id; ?>">Supprimer</td>
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