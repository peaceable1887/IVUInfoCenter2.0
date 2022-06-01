<?php

class info_sem_type
{
    private $Type_ID;
    private $Type_Name;

    /**
     * @return mixed
     */
    public function getTypeID()
    {
        return $this->Type_ID;
    }

    /**
     * @return mixed
     */
    public function getTypeName()
    {
        return $this->Type_Name;
    }

    /**
     * @param mixed $Type_ID
     */
    public function setTypeID($Type_ID): void
    {
        $this->Type_ID = $Type_ID;
    }

    /**
     * @param mixed $Type_Name
     */
    public function setTypeName($Type_Name): void
    {
        $this->Type_Name = $Type_Name;
    }


}