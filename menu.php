<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="Styles/css/bootstrap.min.css" />
    <link rel="stylesheet" href="Styles/css/font-awesome.min.css" />
    <script src="Styles/js/jquery-2.2.2.min.js"></script>
    <script src="Styles/js/bootstrap.js"></script>

</head>
<?php include 'P_model.php';?>
<body>


<div class="col-lg-12">
    <div class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
                <li><a href="#"><span></span> Information</a></li>
                <li><a href="#"><span></span> Videos</a></li>
                <li><a href="#"><span></span> Contact</a></li>
                <li><a href="#"><span></span> Images</a></li>
            </ul>

        <div class="navbar-text pull-right">Connection
        <?php 
           $compt=get_all_user();
        foreach($compt as $compt2)
        {
        ?>
            <span class="badge" style="background-color:red"><?= $compt2->Nbre_user?></span>
        
        <?php
           }
        ?>
    
        </div>
    </div>
</div>

<div style="margin-left:200px">
     <h1 class="page-header">Gamme des voitures</h1>
     <div class="col-lg-6">
     <h2 class="page-header">Informations vehicules</h2>
          <table>
          <table class="table table-bordered table-hovered">
        <tr style="background-color:black">
            <td style="color:white">Matricule</td>
            <td style="color:white">Nom</td>
            <td style="color:white">Prix</td>
        </tr>

        <?php
           $var1= get_all_vehicule();
        foreach ($var1 as $var2) {
        ?>
        <tr>
        
            <td><?= $var2->matricule;?></td>
            <td><?= $var2->nom;?></td>
            <td><?= $var2->prix;?></td>

        </tr>
        <?php 
           }
        ?>
   </table>
          </table>
     </div>
     <div class="col-lg-5">
     <h2 class="page-header">Saisie vehicule</h2>
                  <form action="#" method="post">
                            <div class="form-group">
                                Matricule
                                <input type="text" name="txt_mat" class="form-control">
                                <span class="help-block" id="span_nom" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>

                            <div class="form-group">
                                Nom
                                <input type="text" name="txt_nom" class="form-control">
                                <span class="help-block" id="span_pw" style="display:none">Pas de vide s'il vous plait</span>                 
                            </div>

                            <div class="form-group">
                                Prix
                                <input type="number" name="txt_prix" class="form-control">
                                <span class="help-block"></span>                 
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success" style="width:460px" name="btn1">Enregistrer</button> 
                                <?php
                                  if(isset($_POST["btn1"]))
                                  {
                                     
                                      get_Insert();
                                  }
                                  
                                ?>
                                        
                            </div>
                            

                  </form>
             </fieldset>
     </div>

</div>

</body>
</html>