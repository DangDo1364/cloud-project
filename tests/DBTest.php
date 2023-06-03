<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    protected static $conn;

    public static function setUpBeforeClass(): void
    {
        self::$conn = new mysqli("beliy-db.mysql.database.azure.com", "dangdo", 
        "01259977014Do@", "banxe");
        
        if (self::$conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        }
    }

    public function testInsertData()
    {
        // Test inserting data into a table
        $sql = "INSERT INTO taikhoan (username, password) VALUES ('dangdo1', '123456')";
        
        $result = self::$conn->query($sql);

        $this->assertTrue($result, 'Failed to insert data into the database.');

        // Test retrieving the inserted data
        $sql = "SELECT * FROM taikhoan WHERE username = 'dangdo1'";

        $result = self::$conn->query($sql);

        $this->assertGreaterThan(0, $result->num_rows, 'Failed to retrieve the inserted data.');    
    }

    public static function tearDownAfterClass(): void
    {
        // Close the database connection
        self::$conn->close();
    }
}
?>