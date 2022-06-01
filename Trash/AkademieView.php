<?php


class AkademieView extends AkademieModel
{
    public function showEvent($name)
    {
        $result = $this->getEvent($name);
        $countData = $_SESSION["recordList"];


        echo "<table>\n";
        echo "<tr>\n";
        echo "<th>Datum</th>\n";;
        echo "</td>\n";

        for($i = 0; $i <= $countData; $i++)
        {
            echo "<tr>\n";

            echo "<td>\n";
            echo "Name:1 " .$result;

            echo "</td>\n";


            echo "</tr>\n";
        }



        echo "</table>\n";



    }
}