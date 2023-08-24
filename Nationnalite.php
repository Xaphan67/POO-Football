<?php

class Nationnalite {
    private string $libelle;

    public function __construct($string $libelle)
    {
        $this->libelle = $libelle;
    }

    public function getLibelle() {
        return $this->libelle;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }
    
    public function __toString() {
        return $this->libelle;
    }
}