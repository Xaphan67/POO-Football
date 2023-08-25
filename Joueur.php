<?php

class Joueur {
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Nationnalite $nationnalite;

    private $carriere = array();

    public function __construct(string $prenom, string $nom, string $dateNaissance, Nationnalite $nationnalite) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->nationnalite = $nationnalite;
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

    public function getNationnalite() {
        return $this->nationnalite;
    }

    public function getCarriere() {
        return $this->carriere;
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

    public function setNationnalite(Nationnalite $nationnalite) {
        $this->nationnalite = $nationnalite;
    }

    public function __toString() {
        return $this->prenom . " " . $this->nom;
    }

    // Ajoute un poste à la carrière du joueur
    public function ajouterCarriere(Carriere $carriere) {
        $this->carriere[] = $carriere;
    }

    // Affiche la carrière du joueur
    public function afficherCarriere() {
        $now = new DateTime();
        $age = $now->diff($this->dateNaissance)->y;
        $result = "<h2>Carrière de $this</h2>
        <p>Nationnalité : $this->nationnalite<br>
        Age: $age ans<<p>
        <p>Historique des équipes :<br>";
        foreach ($this->carriere as $carriere) {
            $result .= $carriere->getEquipe()  . " (" . $carriere->getAnneeSaison() . ")<br>";
        }
        return $result . "</p>";
    }
}