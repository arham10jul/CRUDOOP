<?php
class database
{
    private $db;

    function __construct()
    {
        $conn=mysqli_connect("localhost","root","","dboop");
        $this->db=$conn;
    }
    public function insert($name)
    {
        $q=mysqli_query($this->db,"INSERT INTO `student`(`name`) VALUES ('$name')");
        return $q;
    }
}


?>