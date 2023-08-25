<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <link rel="stylesheet" type="text/css" href="style.css" />
            <title>POO Football</title>
        </head>
    <body>
        <?php
            // Auto-load des fichiers contenant les classes requises
            spl_autoload_register(function ($class_name) {
                require_once $class_name . '.php';
            });

            // Déclaration des pays
            $pays1 = new Pays("France");
            $pays2 = new Pays("Espagne");
            $pays3 = new Pays("Angleterre");
            $pays4 = new Pays("Italie");

            // Déclaration des équipes
            $equipe1 = new Equipe($pays1, "Paris Saint-Germain");
            $equipe2 = new Equipe($pays1, "Racing Club Stras");
            $equipe3 = new Equipe($pays2, "Real Madrid");
            $equipe4 = new Equipe($pays2, "FC Barcelone");
            $equipe5 = new Equipe($pays3, "Manchester United");
            $equipe6 = new Equipe($pays4, "Juventus");

            // Déclaration des nationnalitées
            $nationnalite1 = new Nationnalite("France");
            $nationnalite2 = new Nationnalite("Argentine");
            $nationnalite3 = new Nationnalite("Brésil");
            $nationnalite4 = new Nationnalite("Portugal");

            // Déclaration des joueurs
            $joueur1 = new Joueur("Killian", "Mbappe", "1998-12-20", $nationnalite1);
            $joueur2 = new Joueur("Lionel", "Messi", "1987-06-24", $nationnalite2);
            $joueur3 = new Joueur("Neymar", "Junior", "1992-02-05", $nationnalite3);
            $joueur4 = new Joueur("Cristiano ", "Ronaldo", "1985-02-05", $nationnalite4);

            // Déclaration des carrières des joueurs
            $carriere1 = new Carriere($joueur1, $equipe1, 2017);
            $carriere2 = new Carriere($joueur2, $equipe1, 2021);
            $carriere3 = new Carriere($joueur3, $equipe1, 2017);
            $carriere4 = new Carriere($joueur2, $equipe4, 2004);
            $carriere5 = new Carriere($joueur3, $equipe4, 2013);
            $carriere6 = new Carriere($joueur4, $equipe6, 2018);
        
            ?>
            <h1>Liste des équipes par pays :</h1>
            <?php
            
            // Liste les pays dans un tableau
            $listePays = [
                $pays1, $pays2, $pays3, $pays4
            ];

            // Affiche la liste des équipes des pays
            foreach ($listePays as $pays ){
                echo $pays->listerEquipes();
            }

            ?>
            <h1>Liste des joueurs de chaque équipe :</h1>
            <?php

            // Liste les équipes dans un tableau
            $listeEquipes = [
                $equipe1, $equipe2, $equipe3, $equipe4, $equipe5, $equipe6
            ];

            // Affiche la liste des joueurs de chaque équipe
            foreach ($listeEquipes as $equipe) {
                echo $equipe->historiqueJoueurs();
            }

            ?>
            <h1>Carrière de chaque joueur :</h1>
            <?php

            // Liste les joueurs dans un tableau
            $listeJoueurs = [
                $joueur1, $joueur2, $joueur3, $joueur4
            ];

            // Affiche la carrière de chaque joueur
            foreach ($listeJoueurs as $joueur) {
                echo $joueur->afficherCarriere();
            }
        ?>
    </body>
</html>