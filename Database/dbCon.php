<?php
//Testverbindung: DummyDB
class dbCon extends mysqli
{
    public function __construct()
    {
        parent::__construct("192.168.254.62", "root", "8erbahn", "bitnami_wordpress");
        if($this->connect_error)
        {
            echo("Datenbankverbindung fehlgeschlagen" . $this->conncet_error);
        }
    }
}
