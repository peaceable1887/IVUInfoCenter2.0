<?php
class info_sem_event
{
    public $Event_ID;
    public $Event_Seminar;
    public $Event_StartDate;
    public $Event_EndDate;
    public $Event_Location;
    public $Event_Note;
    public $Event_SupportUser;

    /**
     * @return mixed
     */
    public function getEventID()
    {
        return $this->Event_ID;
    }

    /**
     * @param mixed $Event_ID
     */
    public function setEventID($Event_ID): void
    {
        $this->Event_ID = $Event_ID;
    }

    /**
     * @return mixed
     */
    public function getEventSeminar()
    {
        return $this->Event_Seminar;
    }

    /**
     * @param mixed $Event_Seminar
     */
    public function setEventSeminar($Event_Seminar): void
    {
        $this->Event_Seminar = $Event_Seminar;
    }

    /**
     * @return mixed
     */
    public function getEventStartDate()
    {
        return $this->Event_StartDate;
    }

    /**
     * @param mixed $Event_StartDate
     */
    public function setEventStartDate($Event_StartDate): void
    {
        $this->Event_StartDate = $Event_StartDate;
    }

    /**
     * @return mixed
     */
    public function getEventEndDate()
    {
        return $this->Event_EndDate;
    }

    /**
     * @param mixed $Event_EndDate
     */
    public function setEventEndDate($Event_EndDate): void
    {
        $this->Event_EndDate = $Event_EndDate;
    }

    /**
     * @return mixed
     */
    public function getEventLocation()
    {
        return $this->Event_Location;
    }

    /**
     * @param mixed $Event_Location
     */
    public function setEventLocation($Event_Location): void
    {
        $this->Event_Location = $Event_Location;
    }

    /**
     * @return mixed
     */
    public function getEventNote()
    {
        return $this->Event_Note;
    }

    /**
     * @param mixed $Event_Note
     */
    public function setEventNote($Event_Note): void
    {
        $this->Event_Note = $Event_Note;
    }

    /**
     * @return mixed
     */
    public function getEventSupportUser()
    {
        return $this->Event_SupportUser;
    }

    /**
     * @param mixed $Event_SupportUser
     */
    public function setEventSupportUser($Event_SupportUser): void
    {
        $this->Event_SupportUser = $Event_SupportUser;
    }


}