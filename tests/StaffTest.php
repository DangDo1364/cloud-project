<?php

use PHPUnit\Framework\TestCase;

require "./src/Staff.php";

class StaffTest extends TestCase
{
    public function testReturnFullName()
    {   
        $staff = new Staff;

        $staff->firstName = "Nguyen";

        $staff->lastName = "Do";
    
        $this->assertEquals("Nguyen Do", $staff->getFullName());    
    }

    public function testReturnLastName()
    {
        $staff = new Staff;

        $staff->firstName = "Nguyen";

        $staff->lastName = "Do";
    
        $this->assertEquals("Do", $staff->getLastName());    
    }
}

?>