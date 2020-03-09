$('.entete_navigation_burger').click(function(e){
    e.preventDefault();
//    on ajoute ou on supprime la classe is-open
    $('.entete_navigation').toggleClass('is-open');
    
})

$(document).ready(function(){
// au clique sur le bouton register on exeute la fonction
    $("#envoyer").click(function(e){
        e.preventDefault();
 
        $.post(
            'contact.php', // notre fichier php
            {
                nom : $("#nom").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à contact.php
                prenom: $("#prenom").val(),
                mail: $("#mail").val(),
                contenu: $("#contenu").val(),
                rgpd: $("#rgpd").val()
            },
 
            function(data){
 
                if(data == 'Success'){
                     // Le message a ete envoyé. Ajoutons lui un message dans la page HTML.
 
                     $("#resultat").html("<p>Votre message à été bien pris en compte !</p>");
    
                }
                else{
                     // Le message n'a pas ete envoyé. (data vaut ici "failed")
 
                     $("#resultat").html("<p>Votre message ne peut etre envoyer pour le moment...</p>");
                }
         
            },
            //'text'
         );
    });
});