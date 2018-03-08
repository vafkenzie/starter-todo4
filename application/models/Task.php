<?php

require_once APPPATH . 'core/Entity.php';
class Task extends Entity
{
    private $task;
    private $priority;
    private $size;
    private $group;

    public function setTask($value)
    {
        $this->task = $value;
    }

    public function setPriority($value)
    {
        $this->priority = $value;
    }

    public function setSize($value)
    {
        $this->size = $value;
    }

    public function setGroup($value)
    {
        $this->group = $value;
    }

    public function getTask()
    {
        return $this->task;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getGroup()
    {
        return $this->group;
    }
}
