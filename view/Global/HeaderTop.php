<?php

class HeaderTop
{
    function ProfilData($userWelcome, $edit, $logoutBtn)
    {
        $profilData = "<div class='profilData'>
                           <div class='userWelcome'>".$userWelcome."</div>
                           <div class='editAndLogout'>
                               <div class='edit'>".$edit." </div>&nbsp;|&nbsp;
                               <div class='logout'> ".$logoutBtn."</div>
                           </div>
                       </div>";

        return $profilData;
    }
}