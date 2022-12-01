<!DOCTYPE html>
<html>
<head>
<link href="Admin/style.css/https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<!--<link rel="stylesheet" type="text/css" href="<? base_url('/assets/css/pdf_style.css') ?>"/>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
   
.invoice table {
    width: 100%;
    border : 1px solid dark;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,
.invoice table th {
    border: 1px solid black;
    padding: 10px;
    background: #ffffff;
    border-bottom: 1px solid #fff
}

.table, th, tr, td{
    border: 1px solid black;
}

 </style>
</head>
<body>           
<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
               
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
            
                            <div class="row">
                              <h3 class="box-title">Liste des structures</h3><div class="col-sm-13">
                            </div>
                       
                        <main>
                           
                            <table>
                                <thead>
                                    <tr>
                                    <th class="bg-light border border-dark">#</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="bg-light border border-dark">lieu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i=1;  ?>
                                           <?php foreach ($structure_de_sante as $row) {?>
                                            <tr>
                                                <th  scope="row"><?php echo $i++;?></th>
                                                <td ><?php echo $row->nom_structure; ?></td>
                                                <td><?php echo $row->lieu_structure; ?></td>                                               
                                           </tr>
                                           <?php } ?>      
                                    </tr>
                                    
                             
                            </table>
                            
                        </main>
                    </div>
                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>