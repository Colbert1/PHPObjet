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
    public function Attaquer($Att)
    {
        //$this->_vie = $Att;
       
        echo '<p>' . $this->_pseudo . ' attaque</p>';
        $Att->Defendre(50);
    }
    public function Defendre($Def)
    {
        $this->_vie -= $Def;
        echo '<p>'. $this->_pseudo.' a plus que ' . $this->_vie . ' de vie.</p>';
    }
}
