<?php

$bdd = mysqli_connect("localhost","tim_pfe2019eq6","7yjgkI7q9p","tim_pfe2019eq6");
$ok =  mysqli_set_charset($bdd,'utf8');


if(isset($_POST['code'])){
$code = $_POST['code']
 mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone, code, type) VALUES ('','','','$code','vue')");
    mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone, code, type) VALUES ('','','','$code','vue')");
    mysqli_query($bdd,"INSERT INTO `notes` (id, contenu,perssone, code, type) VALUES ('','','','$code','vue')");
    
}
?>


<form method="post">
    <input type="text" name="code">
    <button type="submit">Passser</button>
</form>
