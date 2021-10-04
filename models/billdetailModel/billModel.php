<?php 
class Bills
{
    public $billid;
    public function __construct($Bill_ID)
    {
        $this->billid=$Bill_ID;
    }
    public static function getAll()
    {
        $billList=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM Bill
        ORDER BY Bill.Bill_ID";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Bill_ID=$my_row[Bill_ID];
            $billList[]=new Bill($Bill_ID);
        }
        require("connection_close.php");
        return $billList;
    }
}
?>