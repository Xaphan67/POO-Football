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
            $equipe1 = new Equipe($pays1, "Parais Saint-Germain");
            $equipe2 = new Equipe($pays1, "Racing Club Stras");
            $equipe3 = new Equipe($pays2, "Real Madrid");
            $equipe4 = new Equipe($pays2, "FC Barcelone");
            $equipe5 = new Equipe($pays3, "Manchester United");
            $equipe6 = new Equipe($pays4, "Juventus");
            
            // Liste les pays dans un tableau
            $listePays = [
                $pays1, $pays2, $pays3, $pays4
            ];

            // Affiche la liste des équipes d'un pays
            foreach($listePays as $pays ){
                echo $pays->listerEquipes();
            }
        ?>
    </body>
</html>