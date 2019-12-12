<?php
class Personnage
{
    //Propriétés
    private $_pseudo;
    private $_vie;
    private $_PDO;
    //Méthode
    public function __construct($Id_Perso)
    {
        $BasePersonnage = new PDO('mysql:host=192.168.65.206; dbname=Colbert; charset=utf8', 'Colbert', 'Colbert');
        //select * from personnage where id = id  
    }
}
