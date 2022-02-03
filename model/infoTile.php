<?php

session_start();

class infoTile
{

    public function __toString()
    {
        return "<div class=\"infoTile\">
                    <div class=\"infoImg\"></div>
                    <div class=\"infoText\">
                        <span class=\"infoHeadline\">IVU Express 58</span><br>
                        <span class=\"subText\">Wissenswerrtes rund um die Versorgungswirtschaft</span>
                    </div>
                    <div class=\"btnContainerInfo\">
                        <button class=\"infoReadMore\">Weiterlesen</button>
                    </div>  
                </div>";
    }
}