<?php
class Currency
{
    static public function getAll()
    {
        $requete = "SELECT * FROM `currency`";
        $stmt = Db::connect()->prepare($requete);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
