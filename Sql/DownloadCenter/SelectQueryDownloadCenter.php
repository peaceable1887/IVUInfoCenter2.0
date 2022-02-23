<?php

class SelectQueryDownloadCenter
{
    function sqlQuery_loadDownloadsASC()
    {
        $sql = "SELECT Download_ID,Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                ORDER BY Download_Date ASC
                LIMIT 30";

        return $sql;
    }
    function sqlQuery_loadDownloadsDESC()
    {
        $sql = "SELECT Download_ID,Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                ORDER BY Download_Date DESC
                LIMIT 30";

        return $sql;
    }
    function sqlQuery_sortByCategory()
    {
        $sql = "SELECT Download_Number,Download_Date, Download_Subject, Field_Name, Subfield_Name FROM info_downl 
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_subfield ON info_downl_subfield.Subfield_ID = info_downl.Download_Subfield
                WHERE Download_Status = 1 
                AND Download_Deleted = 0
                AND (Download_Permission = 0 OR Download_Permission = 1)
                AND info_downl_field.Field_Name = '$category'
                ORDER BY Download_Date DESC";

        return $sql;
    }
    function sqlQuery_showDownloadDetails($id)
    {
        $sql = "SELECT Download_ID, Download_Subject, Download_Date, Download_Number, Field_Name, Download_Description, 
                File_Size, User_Firstname, User_Surname 
                FROM info_downl
                INNER JOIN ossy_cus_user_det ON ossy_cus_user_det.User_SupportUser = info_downl.Download_SupportUser
                INNER JOIN info_downl_field ON info_downl_field.Field_ID = info_downl.Download_Field
                INNER JOIN info_downl_file ON info_downl_file.File_Download = info_downl.Download_ID        
                WHERE Download_ID = '$id'";

        return $sql;
    }

}