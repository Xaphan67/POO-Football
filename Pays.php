<?php

class Pays {
    private string $nom;
    private $equipes =array();

    public function __construct(string $nom)
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

    // Affecte une équipe à ce pays
    public function ajouterEquipe(Equipe $equipe){
        $this->equipes[] = $equipe;
    }

    // Liste les équipes affectées à ce pays
    public function listerEquipes()
    {
        $result = "<h1>Equipes affectées au pays $this->nom :</h1>";
        foreach ($this->equipes as $equipe)
        {
            $result .= $equipe . "<br>";
        }
        return $result;
    }
}