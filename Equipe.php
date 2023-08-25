<?php

class Equipe {
    private Pays $pays;
    private string $nom;

    private $joueurs = array();

    public function __construct(Pays $pays, string $nom)
    {
        $this->pays = $pays;
        $this->nom = $nom;

        $this->pays->ajouterEquipe($this);
    }

    public function getPays() {
        return $this->pays;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPays($pays) {
        $this->pays = $Pays;
    }
    
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function __toString() {
        return $this->nom;
    }

    // Ajoute un joueur à l'équipe
    public function ajouterJoueur(Joueur $joueur) {
        $this->joueurs[] = $joueur;
    }

    // Affiche l'historique des joueurs de l'équipe
    public function historiqueJoueurs() {
        $result = "<h2>Joueurs de l'équipe $this</h2>";
        if (count($this->joueurs) > 0) {
            foreach ($this->joueurs as $joueur) {
                $carriere = $joueur->getCarriere();
                foreach ($carriere as $poste) {
                    if ($poste->getEquipe() == $this) {
                        $result .= $poste . "<br>";
                    }
                }
            }    
        }
        else {
            $result .= "Aucun joueur dans l'équipe";
        }
        return $result;
    }
}