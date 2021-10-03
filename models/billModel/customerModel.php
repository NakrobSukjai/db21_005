<?php
class Customer
{
    public $cus_id , $cus_name ;

    public function __construct($cus_id , $cus_name)
    {
        $this->cus_id = $cus_id ;
        $this->cus_name = $cus_name;
    }

    public static function getAll()
    {
        $CustomerList = [] ;

        require("connection_connect.php");
        $sql = "SELECT * FROM Customer
        ORDER BY Customer.Customer_ID ASC";
        $result = $conn -> query($sql);
        while ($my_row = $result -> fetch_assoc())
        {
            $Customer_ID = $my_row[Customer_ID];
            $C_Name = $my_row[C_Name];
            $CustomerList[] = new Customer($Customer_ID,$C_Name);

        }
        require("connection_close.php");
        return $CustomerList;

    }


}
?>