<?php

class Pays {
    private string $nom;

    public function __construct($string $nom)
    {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function __toString() {
        return $this->nom;
    }
}