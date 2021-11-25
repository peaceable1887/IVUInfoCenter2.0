<?php


class Einstellungen
{
    function showProfilSettings()
    {
        $dbCon = new infoCenterDbCon();
        $userData = new loadProfilData();
        $container = new ProfilEditieren();
        $userid = $_SESSION['userid'];

        $sqlRes = mysqli_query($dbCon, $userData->loadData($userid));
        $arCur = mysqli_fetch_array($sqlRes);
        $_SESSION["User_Firstname"] = utf8_encode($arCur["User_Firstname"]);
        $_SESSION["User_Surname"] = utf8_encode($arCur["User_Surname"]);
        $_SESSION["User_Gender"] = utf8_encode($arCur["User_Gender"]);
        $_SESSION["User_Email"] = utf8_encode($arCur["User_Email"]);
        $_SESSION["User_Phone"] = utf8_encode($arCur["User_Phone"]);
        $_SESSION["User_Mobile"] = utf8_encode($arCur["User_Mobile"]);

        echo $container->editProfil($_SESSION["User_Gender"],$_SESSION["User_Firstname"],$_SESSION["User_Surname"],
            $_SESSION["User_Email"],$_SESSION["User_Email"],$_SESSION["User_Email"]);

        echo $container->editAddress();

        echo $container->selectInterests();

        echo $container->editAccessData();
    }
}