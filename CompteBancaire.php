<?php

class CompteBancaire{
    private string $libellé;
    private int $soldeInitial;
    private int $deviseMonetaire;
    private string $titulaireUnique;

    public function __construct ($libellé, $soldeInitial, $deviseMonetaire, $titulaireUnique){
        $this -> libellé = $libellé;
        $this -> soldeInitial = $soldeInitial;
        $this -> deviseMonetaire = $deviseMonetaire;
        $this -> titulaireUnique = $titulaireUnique;

    }

}