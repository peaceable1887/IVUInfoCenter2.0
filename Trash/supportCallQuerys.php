<?php

/*class supportCallQuerys
{
    function loadTicketContent($callNumber)
    {
        $sql = "SELECT Call_Number, Call_Date_Received, ossy_call_status.Status_Name, ossy_call_field.Field_Name, Call_Subject, ossy_cus_user_det.User_Surname,
                ossy_cus_user_det.User_Firstname,ossy_call_priority.Priority_Name, ossy_call_cat.Category_Name, Call_Description
                FROM ossy_call
                INNER JOIN ossy_call_status ON ossy_call_status.Status_ID = ossy_call.Call_Status
                INNER JOIN ossy_call_field ON ossy_call_field.Field_ID = ossy_call.Call_Field
                INNER JOIN ossy_cus_user_det ON ossy_cus_user_det.User_ID = ossy_call.Call_User
                INNER JOIN ossy_call_priority ON ossy_call_priority.Priority_ID = ossy_call.Call_Priority
                INNER JOIN ossy_call_cat ON ossy_call_cat.Category_ID = ossy_call.Call_Category
                WHERE Call_Number = '$callNumber';";

        return $sql;
    }

    function loadTicketChat($callNumber)
    {
        $sql = "SELECT Ticket_ID, Ticket_Call,Ticket_Content, Ticket_Date, Ticket_Type 
                FROM ossy_call_ticket
                INNER JOIN ossy_call ON ossy_call.Call_ID = ossy_call_ticket.Ticket_Call
                WHERE ossy_call.Call_Number = '$callNumber'
                ORDER BY Ticket_Date DESC;";

        return $sql;
    }

    function load_call_priority()
    {
        $sql = "SELECT Priority_Name FROM ossy_call_priority;";

        return $sql;
    }

    function load_call_field()
    {
        $sql = "SELECT Field_Name FROM ossy_call_field WHERE Field_Deleted = 0;";

        return $sql;
    }
}