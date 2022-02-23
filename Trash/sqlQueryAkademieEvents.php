<?php
/*class sqlQueryAkademieEvents
{
    function showEventContent($eventID)
    {
        $sqlStm = "SELECT Event_ID, Seminar_Description, Seminar_Content,Seminar_Target, Seminar_Premises, Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Seminar_Status = 1 AND Event_ID = '$eventID'";

        return $sqlStm;
    }
}