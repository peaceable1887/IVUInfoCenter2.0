<?php
include_once(".env");

//noch auf PDO wechseln !
class infoCenterDbCon extends mysqli
{
    public function __construct()
    {
        parent::__construct(getenv("PORT"), getenv("USERNAME"), getenv("DBPASSWORD"), getenv("DATABASE"));
        if($this->connect_error)
        {
            echo("Datenbankverbindung fehlgeschlagen" . $this->connect_error);
        }
    }

    protected function dbCon()
    {
        $mysqli = new mysqli(getenv("PORT"), getenv("USERNAME"), getenv("DBPASSWORD"), getenv("DATABASE"));

        if($mysqli->connect_error)
        {
            echo("Datenbankverbindung fehlgeschlagen" . $mysqli->connect_error);

        }else
            {
                return $mysqli;
            }
    }

    protected function getMySqlQuery($dbCon, $sqlStmt)
    {
        $query = mysqli_query($dbCon,$sqlStmt);
        return $query;
    }

    protected function getFetchArray($sqlRes)
    {
        $fetchArr = mysqli_fetch_array($sqlRes);
        return $fetchArr;
    }

    protected function getNumRows($numberRows)
    {
        $numRows = mysqli_num_rows($numberRows);
        return $numRows;
    }

    protected function closeDbCon($dbCon)
    {
        $closeDb = mysqli_close($dbCon);
        return $closeDb;

    }


}
