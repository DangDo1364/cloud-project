<?php
class Staff
{
    public $firstName;
    public $lastName;
    public function getFullName()
    {
        return trim("$this->firstName $this->lastName");
    }
    public function getLastName()
    {
        return $this->lastName;
    }
}
?>
