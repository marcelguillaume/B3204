<?php 

$bdd = mysqli_connect("localhost","tim_pfe2019eq6","7yjgkI7q9p","tim_pfe2019eq6");


$req = $_GET['req'];
$code = $_GET['code'];



if($req==1){
   mysqli_query($bdd,"INSERT INTO `notes` (`id`, `contenu`, `code`, `type`) VALUES ('','', '$code', 'debut');"); 
}

if($req=="quit"){
  mysqli_query($bdd,"DELETE FROM `notes` WHERE `code` = '$code'");  
}

if($req=="nbvue"){
  $req = mysqli_query($bdd,"SELECT * FROM notes WHERE code = '$code' AND type='vue'");
  $num = mysqli_num_rows($req);
  echo $num;
}

if($req=="ajoutvue"){
  $req2 = mysqli_query($bdd,"INSERT INTO `notes` (`id`, `contenu`, `code`, `type`) VALUES ('','','$code','vue');");

}



?>