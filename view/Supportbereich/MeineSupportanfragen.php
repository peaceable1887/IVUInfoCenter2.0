<?php


class MeineSupportanfragen
{
    function showBtnMenu()
    {
        $menu = "<table class='menuBtnMySupportrequest'>
            <th><button>Meine offenen</button></th>
            <th><button>Unsere offenen</button></th>
            <th><button>Meine erledigten</button></th>
            <th><button>Unsere erledigten</button></th>
          </table>";

        return $menu;
    }
}