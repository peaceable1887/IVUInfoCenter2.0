<?php

include_once(".env");

class Login extends infoCenterDbCon
{
    function showLogin($sql)
    {
        if(isset($_GET['login'])) {
            $username = $this->encrypt(getenv("ENCRYPT_KEY"), $_POST['username']);
            $password = $this->encrypt(getenv("ENCRYPT_KEY"), $_POST['password']);

            $sqlRes = $this->getMySqlQuery($this->dbCon(), $sql->userVerification($username, $password));
            $arCur = $this->getFetchArray($sqlRes);

            if($username == utf8_encode($arCur["User_Username"]) && $password == utf8_encode($arCur["User_Password"]))
            {
                $_SESSION['userid'] = $arCur['User_ID'];
                $userid = $_SESSION['userid'];
                $sqlRes = $this->getMySqlQuery($this->dbCon(), $sql->loadFullname($userid));
                $arCur = $this->getFetchArray($sqlRes);
                $_SESSION["User_Firstname"] = utf8_encode($arCur["User_Firstname"]);
                $_SESSION["User_Surname"] = utf8_encode($arCur["User_Surname"]);

                die('<meta http-equiv="refresh" content="0; URL=http://127.0.0.1/wordpress/">');

            } else
                {
                    $errorMessage = "E-Mail oder Passwort war ungültig<br>";
                }

        }

        if(isset($errorMessage)) {
            echo $errorMessage;
        }

        echo "<form action=\"?login=1\" method=\"post\">
            Benutzername:<br>
            <input type=\"text\" size=\"40\" maxlength=\"250\" name=\"username\"><br><br>            
            Passwort:<br>
            <input type=\"password\" size=\"40\"  maxlength=\"250\" name=\"password\"><br>            
            <input type=\"submit\" value=\"Einloggen\">
          </form>";

    }

    function showNotLoggedIn()
    {
       if(!isset($_SESSION['userid']))
        {
            ?>
            <style>
                body
                {
                    display: none;
                }
            </style>
            <meta http-equiv = "refresh" content = "0; url = http://127.0.0.1/wordpress/login/" />
            <?php
        }

    }

    private function encrypt($key, $string)
    {
        $result = '';

        for ($i=0; $i<strlen($string); $i++)
        {
            $char		= substr($string, $i, 1);
            $keychar	= substr($key, ($i % strlen($key))-1, 1);
            $char		= chr(ord($char)+ord($keychar));
            $result	   .= $char;
        }
        return base64_encode($result);
    }

}