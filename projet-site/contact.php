<?php
session_start();
include 'bdd_connexion.php';
include 'entete.php';
$date = date("d-m-Y");
$heure = date("H:i");
//fonction pour récuperer l'adresse ip 
function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ipadresse = getIp();
//on initialise les variables a nul
$nom = "";
$prenom = "";
$mail = "";
$contenu="";

if($_POST){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $contenu = $_POST['contenu'];
    if(isset($_POST['rgpd'])){
        $rgpd = $_POST['rgpd'];
    }
    else{
        $rgpd = "";
    }
    if(isset($_POST['captcha']) and !empty($_POST['captcha'])){
        if($_POST['captcha']==$_SESSION['code']){
            //on vérifie si tout les champs sont pas vide
            if(!empty($nom) and !empty($prenom) and !empty($mail) and !empty($contenu) and !empty($rgpd)){
                $requete = $pdo->prepare('insert into client (nom, prenom, mail, message,rgpd,date, heure, ip) values(?, ?, ?, ?, ?, ?, ?, ?)');
                $requete ->execute(array($nom, $prenom, $mail, $contenu, $rgpd, $date, $heure, $ipadresse));
                echo '<div class="alert alert-success">Votre message à été bien envoyé</div>';

            }else{
                echo '<div class="alert alert-danger"> Impossible d\'envoyer votre messages! vérifiez que vous avez bien rempli tous les champs..</div>';
            }
        } else {
            echo '<div class="alert alert-danger"> Code de vérification incorrect, veuillez saisir le code correct</div>';;

        }
    }else{
        echo '<div class="alert alert-danger"> Impossible d\'envoyer votre messages! vérifiez que vous avez bien rempli tous les champs...</div>';
    }    
}

?>

<div class="container-fluid formcontact">
    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="votre nom" value="<?php echo $nom ;?>" >
            </div>
            <div class="form-group col-md-6">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="votre prenom" value="<?php echo $prenom ; ?>"  >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="mail">Mail</label>
                <input type="email" class="form-control" id="mail" name="mail" placeholder="votre email" value="<?php echo $mail; ?>" >
            </div>

        </div> 
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="contenu">Votre message</label>
                <textarea class="form-control" id="contenu" name="contenu"  placeholder="" value="<?php  echo $contenu ;?>" ></textarea>
            </div>
        </div>
        <div>
            <input name="captcha" type="text">
            <img src="captcha.php" style="vertical-align: middle;"/>
        </div>
        <div>
            <input type="checkbox" id="rgpd" name="rgpd" value="oui">
            <label for="rgpd">Règlement général sur la protection des données (consultez l'article Porotection de la vie privée)</label>
        </div>


        <button type="submit" class="btn btn-dark" name="envoyer">Envoyer</button>
    </form>
</div>


<?php
include 'pied.php';
?>
