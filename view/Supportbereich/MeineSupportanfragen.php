<?php


class MeineSupportanfragen
{
    function showBtnMenu()
    {
        $menu = "<table class='menuDownloadCenter'>
            <th><button>Meine offenen</button></th>
            <th><button>Unsere offenen</button></th>
            <th><button>Meine erledigten</button></th>
            <th><button>Unsere erledigten</button></th>
          </table>";

        return $menu;
    }
}