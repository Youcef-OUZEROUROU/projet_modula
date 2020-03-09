<?php
session_start();
include 'bdd_connexion.php';
include 'entete.php';
//on prépare la requete de selection 
$listes = $pdo->prepare('select * from client ORDER BY date DESC');
//on execute la requete
$listes->execute();
//on verifié si y a des lignes 
$existe = $listes->rowCount();
//on vérifier si on a une ligne qui existe et on fait un fetch
if($existe > 0){
    $rows =  $listes->fetchAll(PDO::FETCH_ASSOC);

}else{
    //sinon on mis la variable rows a vide pour ne pas avoir d'erreurs en cas ou ca nous retourne aucune ligne
    $rows='';
    echo '<div class="alert alert-danger">'.'Aucune utilisateur n\'est disponible dans la base!'.'</div>';
}

?>

<?php if($rows != ""){
?>
<div class="tabliste">
    <b>Liste des utilisateurs: </b>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Adresse mail</th>
    </tr>
  </thead>
  <tbody>
   <?php 
        foreach($rows as $lignes): 
        ?>
   
     <tr class="st" scope="row">
            <td> <?php echo $lignes['date']; ?></td>
            <td> <?php echo $lignes['heure']; ?></td>
            <td><a href="detailinfo.php?id=<?php echo $lignes['id']; ?>"><?php echo $lignes['mail']; ?></a></td>

        </tr>   

        <?php endforeach;  ?>
    

  </tbody>
</table>
</div>
<!--  en cas ou y a uncun utilisateur dans la base de donnée on affiche un message      -->
 <?php  
}
else{
    ?>
<div class="nosuer"></div>
<?php }?>

<?php 
include 'pied.php';
?>