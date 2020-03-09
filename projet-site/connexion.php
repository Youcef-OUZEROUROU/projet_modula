<?php
session_start();
include 'bdd_connexion.php';
include 'entete.php';
$login="";
$mdp="";

if(isset($_POST['enter'])){
    $login = $_POST['login'];
    $mdp = md5($_POST['mdp']);
    if(!empty($login) and!empty($mdp)){
        $requete = $pdo->prepare('select * from administrateur where nom = ? and mdp = ?'); 
        $requete->execute(array($login, $mdp)); 
        $existe = $requete->rowCount();
        if($existe > 0 ){
            $donnees = $requete->fetch();
            $_SESSION['id'] = $donnees['id'];
            $_SESSION['login'] = $donnees['login'];
            $_SESSION['mdp'] = $donnees['mdp'];

            header('location:utilisateurs.php?id='.$_SESSION['id']); 
        
    } else{
             echo '<div class="alert alert-danger"> Vous devez remplir tous les champs</div>';
        }
}
}

?>

<div class="container-fluid formconnexion">
    <form action="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ogin">Login</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Votre login" value="<?php  ?>" >
            </div>
            <div class="form-group col-md-6">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" value="<?php ?>"  >
            </div>
        </div>


        <button type="submit" class="btn btn-success" name="enter">Entrer</button>
    </form>
</div>

<?php
include 'pied.php';
?>
