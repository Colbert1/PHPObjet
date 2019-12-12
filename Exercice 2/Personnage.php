<?php
class Personnage
{
    //Propriétés
    private $_pseudo;
    private $_vie;
    //Méthode
    public function __construct($LaVie, $LePseudo)
    {
        $this->_pseudo = $LePseudo;
        $this->_vie = $LaVie;
    }
}
