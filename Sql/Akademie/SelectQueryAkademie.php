<?php
class SelectQueryAkademie
{
    function sqlQuery_loadASC($currentDate)
    {
        $sql = "SELECT Event_ID,Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Event_Location, Seminar_Status
              FROM info_sem
              INNER JOIN info_sem_field ON info_sem_field.Field_ID=info_sem.Seminar_Field
              INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
              WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1
              ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function sqlQuery_load_info_sem_field()
    {
        $sql = "SELECT * FROM info_sem_field";

        return $sql;
    }

    function tile_content($currentDate)
    {
        $sql = "SELECT Seminar_Name, Field_Name, Event_StartDate, Event_EndDate, Type_Name, Event_Location,Seminar_Status
                      FROM info_sem
                      INNER JOIN info_sem_field ON info_sem_field.Field_ID = info_sem.Seminar_Field
                      INNER JOIN info_sem_event ON info_sem_event.Event_Seminar = info_sem.Seminar_ID
                      INNER JOIN info_sem_type ON info_sem_type.Type_ID = info_sem.Seminar_Type
                      WHERE Event_StartDate >='$currentDate' AND Seminar_Status = 1
                      ORDER BY Event_StartDate ASC, Event_Location DESC, Type_Name ASC";

        return $sql;
    }

    function content_description($currentDate)
    {
        $sql = "SELECT Seminar_Description, Event_ID, Seminar_Status
                        FROM info_sem
                        INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                        WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1 ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function content_matter($currentDate)
    {
        $sql = "SELECT Seminar_Content, Event_ID, Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1 ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function targetGroup($currentDate)
    {
        $sql = "SELECT Seminar_Target, Event_ID,Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1 ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function requirement($currentDate)
    {
        $sql = "SELECT Seminar_Premises, Event_ID, Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Event_StartDate >= '$currentDate'AND Seminar_Status = 1 ORDER BY Event_StartDate ASC";

        return $sql;
    }

    function showEventContent($eventID)
    {
        $sqlStm = "SELECT Event_ID, Seminar_Description, Seminar_Content,Seminar_Target, Seminar_Premises, Seminar_Status
                    FROM info_sem
                    INNER JOIN info_sem_event ON info_sem.Seminar_ID=info_sem_event.Event_Seminar   
                    WHERE Seminar_Status = 1 AND Event_ID = '$eventID'";

        return $sqlStm;
    }
}