<?php
session_start();

ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);


$bdd = mysqli_connect("localhost","tim_pfe2019eq6","7yjgkI7q9p","tim_pfe2019eq6");
$ok =  mysqli_set_charset($bdd,'utf8');



?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Fiches personelles</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=devic-width, initial-scale=1">
    <script src="script.js"></script>
    <link href="img/gs.ttf" rel="stylesheet">
    <link href="img/jtr.otf" rel="stylesheet">
    <link rel="apple-touch-icon" href="notes.png" />
</head>

<body>
    <div id="contenu">
        <?php
if(isset($_GET['code']) || isset($_SESSION['code'])){
    
    
    
   
    
    if(isset($_GET['code'])){
        $_SESSION['code'] = $_GET['code'];
        $code = $_GET['code'];
    }
    
     
    if(isset($_SESSION['code'])){
        $code = $_SESSION['code'];
    }
   
    
    if(isset($_GET['perso'])){
        if($_GET['perso']=='Simon'){
            echo '<div id="header">
            <img src="img/simon.png" alt="photo de simon">
            <h1>Simon Fournier</h1>
            <div id="info">
                <p>19 ans</p>
                <p>Etudiant</p>
            </div>  
        </div> 
     <div id="content"> 
        <h1>Biographie</h1>
        <p>Etudiant en Tourisme, Simon est resté au Cegep pour les vacances de Noël car sa famille vit à Montréal. C\'est également pour lui l\'occasion de profiter de sa blonde Eglantine qui a accepté de rester à ses côtés. Simon est quelqu\'un de très sociable qui adore sortir et rencontrer d\'autre personne. Tout comme Eglantine, il est passioné de pop-rok mais il préfère les films de science-fiction.</p>
        <h1>Affinités</h1>
        <div id="left">
    <div id="affinite">
        <div class="affin">
            <p>Charlotte</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
         <div class="affin">
            <p>Marcel</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
         <div class="affin">
            <p>Thomas</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        <div id="right">
         <div class="affin">
            <p>Louis</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Eglantine</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Sarah</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        </div>
        
    </div>
    
    ';

        }
        if($_GET['perso']=='Charlotte'){
            echo '<div id="header">
            <img src="img/charlotte.png" alt="photo de charlotte">
            <h1>Charlotte Robert</h1>
            <div id="info">
                <p>19 ans</p>
                <p>Etudiante</p>
            </div>  
        </div> 
     <div id="content"> 
        <h1>Biographie</h1>
        <p>Charlotte étudie en Physiothérapie au Cégep de Matane. Elle vit en résidence mais est originaire de Rimouski. Elle est en couple avec Louis depuis plus d\'un an. Elle passe son temps avec lui, amis aussi avec Sarah, sa meilleure amie. Elle est assez jalouse et fait attention aux affinités de son copain. Elle écoute princiapelement du rap francopphone mais est aussi une grande fan des One Direction.</p>
        <h1>Affinités</h1>
        <div id="left">
    <div id="affinite">
        <div class="affin">
            <p>Simon</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
         <div class="affin">
            <p>Marcel</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
         <div class="affin">
            <p>Thomas</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        <div id="right">
         <div class="affin">
            <p>Louis</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Eglantine</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Sarah</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        </div>
    </div>';
        }
        if($_GET['perso']=='Marcel'){
            echo '<div id="header">
            <img src="img/marcel.png" alt="photo de marcel">
            <h1>Marcel Leroy</h1>
            <div id="info">
                <p>20 ans</p>
                <p>Etudiant</p>
            </div>  
        </div> 
     <div id="content"> 
        <h1>Biographie</h1>
        <p>Marcel est étudiant en intégration Multimédia. Solitaire, il passe la plupart de son temps dans sa chambre et ne parle pas à grand monde. Originaire de Québec, il a choisi de passer le nouvel an au Cégép pour être calme et ainsi avoir le temps de terminer son jeu vidéo. Il consacre son temps libre à la recherche de nouveaux de groupes de métal et à regarder des films d\'horreur. Saw est d\'ailleurs son film d\'horreur préféré.</p>
        <h1>Affinités</h1>
        <div id="left">
    <div id="affinite">
        <div class="affin">
            <p>Charlotte</p>
            <ul>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
         <div class="affin">
            <p>Eglantine</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
         <div class="affin">
            <p>Thomas</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        <div id="right">
         <div class="affin">
            <p>Louis</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Simon</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Sarah</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        </div>
    </div>';
        }
        if($_GET['perso']=='Sarah'){
            echo '<div id="header">
            <img src="img/sarah.png" alt="photo de sarah">
            <h1>Sarah Chevalier</h1>
            <div id="info">
                <p>19 ans</p>
                <p>Etudiante</p>
            </div>  
        </div> 
     <div id="content"> 
        <h1>Biographie</h1>
        <p>Sarah est étudiante en Sciences Humaines. Elle a grandi à Gaspé et est la cadette d\'une famille de quatre enfants. ELle est restée au Cégep pour fêter la nouvelle année avec ses amis. Elle s\'entend bien avec Louis, le copain de sa meilleure amie Charlotte. Elle adore les films Disney et écoute principalement de la musique francophone.</p>
        <h1>Affinités</h1>
        <div id="left">
    <div id="affinite">
        <div class="affin">
            <p>Charlotte</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
            </ul>
        </div>
         <div class="affin">
            <p>Eglantine</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
         <div class="affin">
            <p>Thomas</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        <div id="right">
         <div class="affin">
            <p>Louis</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Simon</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Marcel</p>
            <ul>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        </div>
        ';
        }
        if($_GET['perso']=='Eglantine'){
            echo '<div id="header">
            <img src="img/eglantine.png" alt="photo de eglantine">
            <h1>Eglantine Lambert</h1>
            <div id="info">
                <p>19 ans</p>
                <p>Etudiante</p>
            </div>  
        </div> 
     <div id="content"> 
        <h1>Biographie</h1>
        <p>Eglantine vient de Matane mais elle est restée au Cégep pour être seule avec simon, son chum. Etudiante en Tourisme, elle est passionnée de pop-rock et de comédies romantiques. Très possessive, elle n\'aime pas que d\'autre fille s\'approche de Simon. Dès qu\'elle le peut, elle quitte sa chambre pour le rejoindre et passer du temps avec lui. Elle à déjà prévu de l\'épouser et de lui faire cinq enfants.</p>
        <h1>Affinités</h1>
        <div id="left">
    <div id="affinite">
        <div class="affin">
            <p>Charlotte</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
         <div class="affin">
            <p>Marcel</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
         <div class="affin">
            <p>Thomas</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        <div id="right">
         <div class="affin">
            <p>Louis</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Simon</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
            </ul>
        </div>
        
        <div class="affin">
            <p>Sarah</p>
            <ul>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/red.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
                <li><img src="img/noir.png" alt="coeur rouge"></li>
            </ul>
        </div>
        </div>
        </div>
    </div>';
            
        } 
        
    echo '<h1>Notes</h1><ul>';
   
    $perssone = $_GET['perso'];
    $requeteSQL = "SELECT * FROM notes WHERE code='$code' AND contenu='$perssone'";
        
    $req = mysqli_query($bdd,$requeteSQL);
    echo mysqli_error($bdd);    
        $nb = mysqli_num_rows($req);
    
        
      
        for($n = 1; $n <= $nb; $n++){
            
          $donnees = mysqli_fetch_array($req);
            
          echo '<li>'.$donnees['perssone'].'</li>';   
        }  
        echo '</ul></div>';
    }
    
    
    else{
        ?>

        <div class="contenuperdu">
            <h1>Choissisez le personnage</h1>
            <div class="perso">
                <a href="?perso=Simon"><img src="img/simon.png"></a>
                <p>Simon</p>
            </div>
            <div class="perso">
                <a href="?perso=Charlotte"><img src="img/charlotte.png"></a>
                <p>Charlotte</p>
            </div>
            <div class="perso">
                <a href="?perso=Marcel"><img src="img/marcel.png"></a>
                <p>Marcel</p>
            </div>
            <div class="perso">
                <a href="?perso=Eglantine"><img src="img/eglantine.png"></a>
                <p>Eglantine</p>
            </div>
            <div class="perso">
                <a href="?perso=Sarah"><img src="img/sarah.png"></a>
                <p>Sarah</p>
            </div>

        </div>


        <?php
    }
 
}
else{
    ?>
        <h1>Veuillez entrez le code de votre session de jeu !</h1>
        <form method="get">
            <p><input type="text" name="code" placeholder="Ex: U4567"></p>
            <button type="submit">Entrez</button>
        </form>
        <?php
}

?>
