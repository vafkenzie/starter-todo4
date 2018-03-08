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
        if (!ctype_alnum(trim(str_replace(' ', '', $value)))) {
            throw new Exception('does not consist of alpha, numeric and spaces');
        }
        if (strlen($value) > 64) {
            throw new Exception('String is too long');
        }
        $this->task = $value;
    }

    public function setPriority($value)
    {
        if (!is_int($value)) {
            throw new Exception('Must be an integer');
        }
        if ($value < 1 || $value > 4) {
            throw new Exception('Must be between 1 to 4');
        }
        $this->priority = $value;
    }

    public function setSize($value)
    {
        if (!is_int($value)) {
            throw new Exception('Must be an integer');
        }
        if ($value < 1 || $value > 4) {
            throw new Exception('Must be between 1 to 4');
        }
        $this->size = $value;
    }
    
    public function setGroup($value)
    {
        if (!is_int($value)) {
            throw new Exception('Must be an integer');
        }
        if ($value < 1 || $value > 5) {
            throw new Exception('Must be between 1 to 4');
        }
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
