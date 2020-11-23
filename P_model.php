<?php
     function get_Connect_user()
     {
        include 'P_connexion.php';
         
        $nom=htmlspecialchars(trim($_POST["txt_un"]));
        $mp=htmlspecialchars(trim($_POST["txt_pw"]));
        $req=$pdo->query("SELECT t_user.user_mail,t_user.password FROM t_user WHERE
        t_user.user_mail='$nom' AND t_user.password='$mp'");
        $row=$req->rowCount();
        if ($row==0) 
        {
            echo '<div id="messbox" class="alert alert-danger" style="width:150px;">Nom utilisateur ou Mot passe incorrect</div>';    
        }
        else 
        {
            header("location:menu.php");
        }
        

     }

     function get_Insert()
     {
        include 'P_connexion.php';
         
        $mat=htmlspecialchars(trim($_POST["txt_mat"]));
        $nom=htmlspecialchars(trim($_POST["txt_nom"]));
        $prix=htmlspecialchars(trim($_POST["txt_prix"]));

         $sql=$pdo->prepare("INSERT INTO t_vehicule VALUES (?,?,?)");
         $sql->execute(array($mat,$nom,$prix));
         echo '<div id="messbox" class="alert alert-success" style="width:250px;">Vehicule enregistré</div>'; 
        
     }

     function get_all_vehicule()
     {
        include 'P_connexion.php';
         
        $req=$pdo->query("SELECT matricule,nom,prix FROM t_vehicule");
        $rs=array();
        while($row=$req->fetchObject())
        {
             $rs[]=$row;
        }
        return $rs;
     }

     function get_all_user()
     {
        include 'P_connexion.php';
         
        $req=$pdo->query("SELECT count(user_mail) as Nbre_user FROM t_user");
        $rs=array();
        while($row=$req->fetchObject())
        {
             $rs[]=$row;
        }
        return $rs;
     }
     
?>