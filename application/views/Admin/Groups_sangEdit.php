<div class="container">
    <br>
    <br>
        <form method="post" action="<?php echo base_url('Groups_sang/update')?>/<?php echo $row->id_groupe_sanguin; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="nom_rhesus" value="<?php echo $row->nom_rhesus; ?>" aria-describedby="emailHelp" placeholder="Enter last name">
            </div>
            <button type="TERMINE" class="btn btn-primary" value="save">TERMINE</button>
            <a href="<?php echo base_url('Groups_sang')?>"><button type="button" class="btn btn-danger">Cancel</button></a>
        </form>  
    </div>


  </body>
</html>