<?php

class sliderFunction
{
    function showEventTile($dbCon, $sqlStm)
    {
        $currentDate = date("Y-m-d");
        $sqlRes = mysqli_query($dbCon, $sqlStm->tile_content($currentDate));

        $recordCount = mysqli_num_rows($sqlRes);

        for ($i = 0;$i <= $recordCount ;$i++)
        {
            for ($x = 0;$x < 3 ;$x++)
            {
                $arCur = mysqli_fetch_array($sqlRes);

                $seminarName = utf8_encode($arCur["Seminar_Name"]);
                $startDate = utf8_encode($arCur["Event_StartDate"]);
                $startDateConvert = strtotime($startDate);
                $newStartDate = date("d.", $startDateConvert);
                $endDate = utf8_encode($arCur["Event_EndDate"]);
                $endDateConvert = strtotime($endDate);
                $newEndDate = date("d.m.Y", $endDateConvert);
                $fieldName = utf8_encode($arCur["Field_Name"]);
                $typeName = utf8_encode($arCur["Type_Name"]);

                $semTile = new semTile($fieldName, $seminarName, $newStartDate,
                    $newEndDate, utf8_encode($arCur["Event_Location"]), $typeName, $x);//Funktioniert noch nicht ganz, werden immer die ersten 3 incrementiert

                return $semTile->__toString();
            }

        }

    }

}