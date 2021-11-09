<?php 

$bdd = mysqli_connect("localhost","admin","my_password","b3204");
$ok =  mysqli_set_charset($bdd,'utf8');


if(isset($_GET['req'])){
$req = $_GET['req'];
$code = $_GET['code'];
    


if($req=="quit"){
  mysqli_query($bdd,"DELETE FROM `notes` WHERE `code` = '$code'");  
}
    
if($req=="A032"){
  $perssone = "Charlotte";
  $text = "Elle a insisté pour que thomas cherche le meurtrier";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04M"){
  $perssone = "Marcel";
  $text = "Marcel à trouvé le corps en allant prendre sa douche";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
  
    
if($req=="A04C1"){
  $perssone = "Charlotte";
  $text = "Marcel à trouvé le corps en allant prendre sa douche";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04C2"){
  $perssone = "Charlotte";
  $text = "Charotte est allée se reposer avant la soirée";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04S1"){
  $perssone = "Sarah";
  $text = "Sarah était en pleurs";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04S2"){
  $perssone = "Sarah";
  $text = "Sarah était dans la douche avant Louis";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04ES1E"){
  $perssone = "Eglantine";
  $text = "Eglantine à entendu charlotte et Louis se disputer, elle était dans le salon avec Simon
";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04ES1S"){
  $perssone = "Simon";
  $text = "Simon à entendu charlotte et Louis se disputer, elle était dans le salon avec Eglantine
";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04ES2E"){
  $perssone = "Eglantine";
  $text = "Eglantine était avec Simon dans le salon
";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="A04ES2S"){
  $perssone = "Simon";
  $text = "Simon était avec Eglantine dans le salon
";
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="PM"){
  $perssone = "Marcel";
  $text = "Marcel prend des photos de Sarah en cachette"
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="PE"){
  $perssone = "Eglantine";
  $text = "Ils étaient dans le salon pour avoir un moment privé"
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}
    
if($req=="PS"){
  $perssone = "Simon";
  $text = "Ils étaient dans le salon pour avoir un moment privé"
  mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');");  
}



if($req=="nbvue"){
  $req = mysqli_query($bdd,"SELECT * FROM notes WHERE code = '$code' AND type='vue'");
  $num = mysqli_num_rows($req);
  echo $num;
}

if($req=="ajoutvue"){
  $req2 = mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone, code, type) VALUES ('','','','$code','vue');");
    echo mysqli_error($bdd);
}

if($req=="entree"){
    $question =  $_GET['code'];
    $parole = $_GET['question'];
    $num = $_GET['num'];
    
    $req2 = mysqli_query($bdd,"INSERT INTO `entree` (`id`, `question`, `parole`,codepartie,etat) VALUES ('','$question','$parole','$num','enattente');");
}

}

if(isset($_POST['question'])){
    
    $question =  $_POST['code'];
    $parole = mysqli_real_escape_string($bdd,$_POST['parole']);
    $num = $_POST['num'];
    
    $req2 = mysqli_query($bdd,"INSERT INTO `entree` (`id`, `question`, `parole`,codepartie,etat) VALUES ('','$question','$parole','$num','enattente');");
    echo mysqli_error($bdd);
    
    
}


if(isset($_POST['req'])){
$req_post = $_POST['req'];


if($req_post=="speak"){
    
    $parole = mysqli_real_escape_string($bdd,$_POST['parole']);
    $requeteSQL = "SELECT question FROM `entree` WHERE parole='$parole' AND etat = 'valider' LIMIT 0,1";
    
    $req = mysqli_query($bdd,$requeteSQL);
    echo mysqli_error($bdd);    
        $nb = mysqli_num_rows($req);
    
        
      
        for($n = 1; $n <= $nb; $n++){
            
          $donnees = mysqli_fetch_array($req);
            
          echo $donnees['question'];   
        }  
    
    
        
}
    
if($req_post=="note"){
   $perssone = mysqli_real_escape_string($bdd,$_POST['perssone']); 
   $text = mysqli_real_escape_string($bdd,$_POST['text']);  
   $req = mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone,code,type) VALUES ('','$perssone','$text','$code','note');"); 
}
    
    
    
    
}




?>
