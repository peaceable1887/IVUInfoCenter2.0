<?php


class SelectQueryEinstellungen
{
    function loadData($userid)
    {
        $sql = "SELECT User_Firstname, User_Surname, User_Gender, ossy_cus_user_det.User_Email, User_Phone, User_Mobile
                FROM ossy_cus_user_det
                INNER JOIN ossy_cus_user ON ossy_cus_user.User_ID = ossy_cus_user_det.User_ID
                WHERE ossy_cus_user_det.User_ID = '$userid'";

        return $sql;
    }
}