<?php

class TypeVoertuigModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTypeVoertuig()
    {
        echo "hoi";
        $sql = "SELECT v.id, v.kenteken, v.type, v.bouwjaar, v.brandstof, v.typevoertuigid, tv.id, tv.rijbewijscategorie
        FROM Voertuig v
        INNER JOIN Typevoertuig tv ON tv.id = v.typevoertuigid;";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}