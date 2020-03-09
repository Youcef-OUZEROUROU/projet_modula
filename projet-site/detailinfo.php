<?php
session_start();
include 'bdd_connexion.php';
include 'entete.php';
$id = intval($_GET['id']);
$requete = $pdo->prepare('select * from client where id=?');
$requete->execute(array($id));
$lignes = $requete->fetch();

?>



<div class="utilisateur">
<p>Utilisateur: <b><?php echo $lignes['nom'] .' '. $lignes['prenom'] ;?></b> </p>
</div>
<div class="tablistes">
    <b>Détail des informations: </b>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse mail</th>
      <th scope="col">Le contenu du message</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Ip adresse</th>
    </tr>
  </thead>
  <tbody>
   
   
     <tr class="st" scope="row">
            <td> <?php echo $lignes['nom']; ?></td>
            <td> <?php echo $lignes['prenom']; ?></td>
            <td> <?php echo $lignes['mail']; ?></td>
            <td> <?php echo $lignes['message']; ?></td>
            <td> <?php echo $lignes['date']; ?></td>
            <td> <?php echo $lignes['heure']; ?></td>
            <td> <?php echo $lignes['ip']; ?></td>

        </tr>  

  </tbody>
</table>
<div class="bouton">
<a href="utilisateurs.php">Retour</a>
</div>
</div>


<?php 
include 'pied.php';
?>