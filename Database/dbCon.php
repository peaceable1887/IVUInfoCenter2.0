<?php
//Testverbindung: DummyDB
class dbCon extends mysqli
{
    public function __construct()
    {
        parent::__construct("localhost", "root", "Hsvnr1vannistel", "bitnami_wordpress");
        if($this->connect_error)
        {
            echo("Datenbankverbindung fehlgeschlagen" . $this->conncet_error);
        }
    }
}
