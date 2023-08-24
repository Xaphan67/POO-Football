<?php

class Joueur {
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;

    public function __construct(string $prenom, string $nom, string $dateNaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
    } 

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setDateNaissance (string $dateNaissance) {
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }
}