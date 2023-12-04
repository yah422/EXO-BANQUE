<?php

class CompteBancaire{
    private string $libellé;
    private int $soldeInitial;
    private int $deviseMonetaire;
    private string $titulaireUnique;

// ------------------ GET ET SET DU LIBELLEE ----------------------

    public function getLibellé()
    {
        return $this->libellé;
    }
    public function setLibellé($libellé)
    {
        $this->libellé = $libellé;

        return $this;
    }
// ------------------ GET ET SET DU SOLDE INITIAL ----------------------

    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }
    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;

        return $this;
    }
// ------------------ GET ET SET DE LA DEVISE MONETAIRE ----------------------

    public function getDeviseMonetaire()
    {
        return $this->deviseMonetaire;
    }
    public function setDeviseMonetaire($deviseMonetaire)
    {
        $this->deviseMonetaire = $deviseMonetaire;

        return $this;
    }
// ------------------ GET ET SET DU TITULAIRE UNIQUE ----------------------

    public function getTitulaireUnique()
    {
        return $this->titulaireUnique;
    }
    public function setTitulaireUnique($titulaireUnique)
    {
        $this->titulaireUnique = $titulaireUnique;

        return $this;
    }

    public function __construct ($libellé, $soldeInitial, $deviseMonetaire, $titulaireUnique){
        $this -> libellé = $libellé;
        $this -> soldeInitial = $soldeInitial;
        $this -> deviseMonetaire = $deviseMonetaire;
        $this -> titulaireUnique = $titulaireUnique;

    }
}

    