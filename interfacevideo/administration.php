<?php

$bdd = mysqli_connect("localhost","admin","my_password","b3204");

if (!$bdd) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$ok =  mysqli_set_charset($bdd,'utf8');



?>
<html>

<head>
    <title>B-3204</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="b3204.php">Gestion des entrées vocales</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <main role="main" class="container">
        <div class="jumbotron">


            <?php
      
      if(isset($_GET['oui'])){
        mysqli_query($bdd,"UPDATE `entree` SET `etat` = 'valider' WHERE `entree`.`id` = ".$_GET['oui'].";");
          
        echo '<div class="alert alert-success" role="alert">
  Entrée validé
</div>';
      }
      
      if(isset($_GET['suppr'])){
          
        $id = $_GET['suppr'];
        mysqli_query($bdd,"DELETE FROM entree WHERE id = $id");
          
         echo '<div class="alert alert-success" role="alert">
  Entrée effacé
</div>';
      }
      
    if(isset($_GET['vider'])){
      $id = $_GET['vider'];
        mysqli_query($bdd,"DELETE FROM entree WHERE etat = 'enattente'");
          
         echo '<div class="alert alert-success" role="alert">
  Entrée effacé
</div>';
      }
      
     //SELECT * FROM `entree` WHERE question="A022" AND etat="valider"
      
      // SELECT question FROM `entree` WHERE parole = 'Appeler la police' AND etat = 'valider' LIMIT 0,1
      
      // SELECT question FROM `entree` WHERE parole LIKE '%Appeler la police%' AND etat = 'valider' LIMIT 0,1
      
      
    ?>


            <table class="table">
                <thead>
                    <h2><a href="?vider">Vider les scènes en attente</a> | <a href="administration.php">Actualiser</a></h2>
                    <tr>
                        <th scope="col"><a href="?ord=id">#</a></th>
                        <th scope="col"><a href="?ord=nom">
                                Nom de la séquence</a></th>
                        <th scope="col">Code partie</th>
                        <th scope="col">Entrée Vocale</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
      
      if(isset($_POST['sequence'])){
          $seq = $_POST['sequence'];
          mysqli_query($bdd,"UPDATE `entree` SET `question` = '$seq' WHERE `entree`.`id` = ".$_POST['id'].";");
          
        echo '<div class="alert alert-success" role="alert">
 Séquence modifié
</div>';
          
          
      }
      
      if(isset($_GET['ord'])){
          
        $ord = $_GET['ord'];
                
      if($ord=="id"){
       $requete = "SELECT * FROM entree ORDER BY id"; 
      }
      if($ord=="nom"){
       $requete = "SELECT * FROM entree ORDER BY question";   
      }
      }
      else{
       $requete = "SELECT * FROM entree ORDER BY id DESC";  
      }

       $resultatSQL = mysqli_query($bdd, $requete);
         
        $nb = mysqli_num_rows($resultatSQL);
      
        for($n = 1; $n <= $nb; $n++){
            
          $donnees = mysqli_fetch_array($resultatSQL);

     
   
     if($donnees['etat']=='enattente'){
        $couleur = 'table-warning';
     }
            
    if($donnees['etat']=='valider'){
        $couleur = 'table-success';
     }
    
    else{
        $couleur=" ";
    }
            
    ?>
                    <tr class="<?php echo $couleur;?>">
                        <th scope="row">
                            <?php echo $donnees['id'];?>
                        </th>
                        <td>
                            <form method="post">
                                <select name="sequence">
                                    <option value="<?php echo $donnees['question'];?>" selected>
                                        <?php echo $donnees['question'];?>
                                    </option>
                                    <option value="0">0</option>
                                    <option value="A01">A01</option>
                                    <option value="A021">A021</option>
                                    <option value="A022">A022</option>
                                    <option value="A031">A031</option>
                                    <option value="A032">A032</option>
                                    <option value="A04M">A04M</option>
                                    <option value="A04M1">A04M1</option>
                                    <option value="A04M2">A04M2</option>
                                    <option value="A04C">A04C</option>
                                    <option value="A04C1">A04C1</option>
                                    <option value="A04C2">A04C2</option>
                                    <option value="A04S">A04S</option>
                                    <option value="A04S1">A04S1</option>
                                    <option value="A04S2">A04S2</option>
                                    <option value="A04ES">A04ES</option>
                                    <option value="A04ES1">A04ES1</option>
                                    <option value="A04ES2">A04ES2</option>
                                    <option value="A051">A051</option>
                                    <option value="A052">A052</option>
                                    <option value="B01">B01</option>
                                    <option value="B01M">B01M</option>
                                    <option value="B01C">B01C</option>
                                    <option value="B01S">B01S</option>
                                    <option value="B01ES">B01ES</option>
                                </select>
                                <input type="hidden" name="id" value="<?php echo $donnees['id'];?>">
                                <button type="submit">Modifier</button>
                            </form>
                        </td>
                        <td>
                            <?php echo $donnees['parole'];?>
                        </td>
                        <td>
                            <?php echo $donnees['codepartie'];?>
                        </td>
                        <td><a href="?oui=<?php echo $donnees['id'];?>">Activer</a> <a href="?suppr=<?php echo $donnees['id'];?>">Supprimer</a></td>
                    </tr>
                    <?php
    
    }
    ?>

                </tbody>
            </table>

        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')

    </script>
    <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
</body>

</html>


<?php
            
mysqli_close($bdd);
            
?>
