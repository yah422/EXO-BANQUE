<?php

class TitulaireUnique{
    private string $nom;
    private string $prenom;
    private string $ville;
    private string $toutlescomptes;
    private int $dateNaissance;


    public function getcalculerAge() {
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $dateNaissance->diff($dateActuelle);
        return $difference->y;
    }

// ------------------ GET ET SET DU NOM ----------------------
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
// ------------------ GET ET SET DU PRENOM ----------------------
    
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
// ------------------ GET ET SET DE LA VILLE ----------------------
    public function getVille()
    {
        return $this->ville;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
// ------------------ GET ET SET DE TOUT LES COMPTES ----------------------
    public function getToutlescomptes()
    {
        return $this->toutlescomptes;
    }
    public function setToutlescomptes($toutlescomptes)
    {
        $this->toutlescomptes = $toutlescomptes;

        return $this;
    }
// ------------------ GET ET SET DE LA DATE DE NAISSANCE ----------------------
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    } 
 
    public function afficherInfos($nom,$prenom,$dateNaissance,$ville){
        echo "Nom : $nom <br> Prénom : $prenom <br> Date de naissance : $dateNaissance <br> Ville : $ville <br> ";

    }

}