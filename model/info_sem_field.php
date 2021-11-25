<?php
class info_sem_field
{
    private $Field_ID_alt;
    private $Field_ID;
    private $Field_Name;
    private $Field_SemPath;
    private $Field_Deleted;

    /**
     * @return mixed
     */
    public function getFieldIDAlt()
    {
        return $this->Field_ID_alt;
    }

    /**
     * @param mixed $Field_ID_alt
     */
    public function setFieldIDAlt($Field_ID_alt): void
    {
        $this->Field_ID_alt = $Field_ID_alt;
    }

    /**
     * @return mixed
     */
    public function getFieldID()
    {
        return $this->Field_ID;
    }

    /**
     * @param mixed $Field_ID
     */
    public function setFieldID($Field_ID): void
    {
        $this->Field_ID = $Field_ID;
    }

    /**
     * @return mixed
     */
    public function getFieldName()
    {
        return $this->Field_Name;
    }

    /**
     * @param mixed $Field_Name
     */
    public function setFieldName($Field_Name): void
    {
        $this->Field_Name = $Field_Name;
    }

    /**
     * @return mixed
     */
    public function getFieldSemPath()
    {
        return $this->Field_SemPath;
    }

    /**
     * @param mixed $Field_SemPath
     */
    public function setFieldSemPath($Field_SemPath): void
    {
        $this->Field_SemPath = $Field_SemPath;
    }

    /**
     * @return mixed
     */
    public function getFieldDeleted()
    {
        return $this->Field_Deleted;
    }

    /**
     * @param mixed $Field_Deleted
     */
    public function setFieldDeleted($Field_Deleted): void
    {
        $this->Field_Deleted = $Field_Deleted;
    }


}
