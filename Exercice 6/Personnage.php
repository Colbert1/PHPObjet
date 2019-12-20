<?php
class Personnage
{
    //Propriétés
    private $_pseudo;
    private $_vie;
    private $_PDO;
    private $_id;
    //Méthode
    public function __construct($valeurid)
    {
        $this->_id = $valeurid;
        $BasePersonnage = new PDO('mysql:host=192.168.65.206; dbname=Colbert; charset=utf8', 'Colbert', 'Colbert');
        $DonneesDeLaBdd = $BasePersonnage->query("UPDATE Personnage SET Vie = 90 WHERE 1" .$valeurid);
        $TableauDeDonnee  = $DonneesDeLaBdd->fetch();
        $this->_pseudo = $TableauDeDonnee['Personnage'];
        $this->_vie = $TableauDeDonnee['Vie'];
    }

    public function Affiche()
    {
        echo "Mon nom est " . $this->_pseudo . " j'ai pris un coup je suis à " . $this->_vie . " PV.";
    }
    public function Defense()
    {
        
    }
}
