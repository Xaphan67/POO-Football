<?php

class Equipe {
    private Pays $pays;
    private string $nom;

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
}