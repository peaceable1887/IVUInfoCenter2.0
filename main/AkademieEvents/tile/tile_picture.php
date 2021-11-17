<?php

class tile_picture
{
    function tile_picture_comp($fieldName)
    {
        if($fieldName == "Personalwesen")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_Personalwesne.png' 
                                   width='40' height='40'>";
        }else if($fieldName == "Energieabrechnung")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_Energieabrechnung.png' 
                                   width='40' height='40'>";
        }
        else if($fieldName == "Dokumentenmanagement")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_Dokumentenmanagement.png' 
                                   width='40' height='40'>";
        }else if($fieldName == "Datenbanken")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_Datenbank.png' 
                                   width='40' height='40'>";
        }
        else if($fieldName == "Energiedatenmanagement")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_EDM.png' 
                                   width='40' height='40'>";
        }else if($fieldName == "Materialwirtschaft")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_MaWi.png' 
                                   width='40' height='40'>";
        }else if($fieldName == "Unternehmenssteuerung")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_Unternehmenssteuerung.png' 
                                   width='40' height='40'>";
        }else if($fieldName == "Finanzbuchhaltung")
        {
            $fieldPicture = "<img style='margin: 0' src='http://127.0.0.1/wordpress/wp-content/uploads/2021/08/Icon_FiBu.png' 
                                   width='40' height='40'>";
        }

        return $fieldPicture;
    }
}