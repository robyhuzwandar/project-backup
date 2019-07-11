<?php
class Hotel{
    
    public $conn;
    
    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root','roby','chartjs');
    }

    public function select()
    {
        if($conn){
            $sql = "SELECT * from hotel";
            $result = $conn->query($sql);
            return $result;
        }else{
            return "gagal konek";
        }
        
    }
}

?>