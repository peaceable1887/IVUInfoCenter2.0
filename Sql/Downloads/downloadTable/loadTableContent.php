<?php
class loadTableContent
{
    function sqlQuery_loadDownloadsASC()
    {
        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                ORDER BY Download_Date ASC";

        return $sql;
    }
    function sqlQuery_loadDownloadsDESC()
    {
        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                ORDER BY Download_Date DESC";

        return $sql;
    }

    function sqlQuery_sortByLoga()
    {

        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = 'LOGA'
                ORDER BY Download_Date DESC";

            return $sql;
    }
    function sqlQuery_sortByEnergy()
    {
        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = 'Ener/:/gy'
                ORDER BY Download_Date DESC";

        return $sql;
    }
    function sqlQuery_sortByCsTwo()
    {

        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = 'CS2'
                ORDER BY Download_Date DESC";

        return $sql;
    }
    function sqlQuery_sortByBelvis()
    {

        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1 
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = 'BelVis'
                ORDER BY Download_Date DESC";

        return $sql;
    }
    function sqlQuery_sortByChargeable()
    {

        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = 'Kostenpflichtige Tutorials'
                ORDER BY Download_Date DESC";

        return $sql;
    }
}