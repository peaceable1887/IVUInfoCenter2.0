<?php
/*class myCalls_query
{
    function myOpen($userid)
    {
        $sql = "";
    }
    function ourOpen()
    {}
    function myCompleted($userid)
    {
        $sql = "SELECT Call_Number, Call_Date_Received, ossy_call_status.Status_Name, ossy_call_field.Field_Name, Call_Subject, ossy_cus_user_det.User_Surname
                FROM ossy_call
                INNER JOIN ossy_call_status ON ossy_call_status.Status_ID = ossy_call.Call_Status
                INNER JOIN ossy_call_field ON ossy_call_field.Field_ID = ossy_call.Call_Field
                INNER JOIN ossy_cus_user_det ON ossy_cus_user_det.User_ID = ossy_call.Call_User
                WHERE Call_User = '$userid' 
                AND Status_Order = 7
                ORDER BY Call_Date_Received DESC;";
        return $sql;
    }
    function ourCompleted()
    {}
}