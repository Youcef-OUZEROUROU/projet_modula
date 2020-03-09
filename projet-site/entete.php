<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site computer</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/app.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </head>

    <body>
        <div class="entete">

            <div class="entete_navigation">
                <div class="entete_navigation_burger">
                    <span class="entete_navigation_burger_icon"></span>
                </div>
                <div class="entete_navigation_logo">
                    <h2 class="entete_navigation_logo_titre">com<i class="fas fa-laptop"></i>puter</h2>

                </div>
                <div class="entete_navigation_menu">
                    <a href="index.php" class="entete_navigation_menu_lien"><i class="fas fa-home"></i> Accuiel</a>
                    <?php
                    if(isset($_SESSION['id'])){ ?>
                    <a href="deconnexion.php" class="entete_navigation_menu_lien"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                    <?php
                    }else{ ?>
                    <a href="connexion.php" class="entete_navigation_menu_lien"><i class="fas fa-sign-in-alt"></i> Connexion</a>

                    <?php }
                    ?>
                    <a href="contact.php" class="entete_navigation_menu_lien"><i class="fas fa-envelope"></i> Contact</a>
                </div>
            </div>

        </div>
        <script src="js/app.js"></script>  
    </body>
</html>