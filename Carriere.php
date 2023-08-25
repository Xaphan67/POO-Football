<?php

class Carriere {
    private Joueur $joueur;
    private Equipe $equipe;
    private int $anneeSaison;

    public function __construct(Joueur $joueur, Equipe $equipe, int $anneeSaison) {
        $this->joueur = $joueur;
        $this->equipe = $equipe;
        $this->anneeSaison = $anneeSaison;

        $this->joueur->ajouterCarriere($this);
        $this->equipe->ajouterJoueur($joueur);
    }

    public function getJoueur() {
        return $this->joueur;
    }

    public function getEquipe() {
        return $this->equipe;
    }

    public function getAnneeSaison() {
        return $this->anneeSaison;
    }

    public function setJoueur(Joueur $joueur) {
        $this->joueur = $joueur;
    }

    public function setEquipe(Equipe $equipe) {
        $this->equipe = $equipe;
    }

    public function setAnneeSaison(int $anneeSaison) {
        $this->anneeSaison = $anneeSaison;
    }

    public function __toString() {
        return $this->joueur . " (" . $this->anneeSaison . ")";
    }
}