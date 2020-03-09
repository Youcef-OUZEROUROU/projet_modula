<?php
	define('HOTE','localhost');	// Mettre le nom d'hôte fourni par l'hébergeur
	define('BDD','bdd_modula');	// Mettre le nom de la base de données fourni par l'hébergeur
	define('UTIL','root');	// Mettre le nom de l'utilisateur de la base de données fourni
	define('PORT', '3308');		// l'hébergeur

	define('MDP',''); //on a pas de mot depasse
	try {
		$pdo = new PDO('mysql:host=' . HOTE . ';dbname=' . BDD . ';port=' .PORT. ';cherset=UTF8',UTIL,MDP);
		// On définit le codage en utf8
		$pdo->exec("set character set utf8");
		// On configure PDO pour qu’il nous renvoie les erreurs dans les requêtes
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}
	catch (PDOException $e){
		echo 'Porblème  lors de la connexion verifiez les paramètres !!!! ' . $e->getMessage();
		exit(1);
	}

?>