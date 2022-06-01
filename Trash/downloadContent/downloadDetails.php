<?php
/*class downloadDetails
{
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