<?php
class payment
{
    public $payment , $id;

    public function __construct($id,$P_Name)
    {
        $this->id = $id;
        $this->payment = $P_Name;
    }

    public static function getpname()
    {
        $paymentList = [] ;
        require("connection_connect.php");
        $sql = "SELECT * from PaymentCondition as pay";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Pay_id = $my_row[Pay_ID];
            $Pay_Name = $my_row[Pay_Name];
            $paymentList[] = new payment($Pay_id,$Pay_Name);
            
        }
        require("connection_close.php");
        return $paymentList ;

    }
}