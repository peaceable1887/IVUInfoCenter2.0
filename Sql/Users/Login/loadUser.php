<?php
class loadUser
{
    function userVerification($username, $password)
    {
        $sql = "SELECT User_ID, User_Username, User_Password 
        FROM ossy_cus_user WHERE User_Username = '$username' AND User_Password = '$password'";

        return $sql;
    }

    function loadFullname($userid)
    {
        $sql = "SELECT User_Firstname, User_Surname
                FROM ossy_cus_user_det
                INNER JOIN ossy_cus_user ON ossy_cus_user.User_ID = ossy_cus_user_det.User_ID
                WHERE ossy_cus_user_det.User_ID = '$userid'";

        return $sql;
    }
}