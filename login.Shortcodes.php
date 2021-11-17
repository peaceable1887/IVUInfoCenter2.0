<?php
/*
Plugin Name: Shortcode: Login
Description: Stellt den Login und alle dazugehörigen Funktionen zur Verfügung
Version: 1.0.0
Author: Felix Hansmann
*/
add_shortcode("sc_login", "login");

function login()
{
    include ("Database/ivu-dbCon.php");
    include ("Sql/Users/Login/loadUser.php");

    session_start();
    $dbCon = new infoCenterDbCon();
    $sqlUser = new loadUser();

    if(isset($_GET['login'])) {
        $username = encrypt('oSsy4UserN4me', $_POST['username']);
        $password = encrypt('oSsy4UserN4me', $_POST['password']);

        $sqlRes = mysqli_query($dbCon, $sqlUser->userVerification($username, $password));
        $arCur = mysqli_fetch_array($sqlRes);

        if ($username == utf8_encode($arCur["User_Username"]) && $password == utf8_encode($arCur["User_Password"])) {
            $_SESSION['userid'] = $arCur['User_ID'];
            die('<meta http-equiv="refresh" content="1; URL=http://127.0.0.1/wordpress/">');
        } else {
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

add_shortcode("sc_loginSuccess", "loginSuccess");

function loginSuccess()
{
    include ("Database/ivu-dbCon.php");
    include ("Sql/Users/Login/loadUser.php");
    include ("Sql/Einstellungen/loadProfilData/loadProfilData.php");

    session_start();
    if(!isset($_SESSION['userid'])) {
        die('Bitte zuerst <a href="http://127.0.0.1/wordpress/login-test">einloggen</a>');
    }

//Abfrage der Nutzer ID vom Login
    $dbCon = new infoCenterDbCon();
    $userFullname = new loadUser();
    $userid = $_SESSION['userid'];

    $sqlRes = mysqli_query($dbCon, $userFullname->loadFullname($userid));
    $arCur = mysqli_fetch_array($sqlRes);
    $_SESSION["User_Firstname"] = utf8_encode($arCur["User_Firstname"]);
    $_SESSION["User_Surname"] = utf8_encode($arCur["User_Surname"]);
}


add_shortcode("sc_logout", "logout");
function logout()
{
    echo "<form method='post'><button name='logout'>Logout</button></form><br>";

    if(isset($_POST["logout"]))
    {
        session_destroy();
        echo "<html>
                <head>
                    <meta http-equiv=\"refresh\" content=\"1; URL=http://127.0.0.1/wordpress/login-test/\">
                </head>
              </html>";

    }


}
// noch auslagern....
function encrypt($key, $string)
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
