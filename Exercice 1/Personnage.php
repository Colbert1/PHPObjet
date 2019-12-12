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
    public function Afficher()
    {
        echo '<p>Le pseudo est : ' . $this->_pseudo . '</p>';
        echo 'La vie est : ' . $this->_vie . '</p>';
    }
    public function Attaquer()
    { }
}
