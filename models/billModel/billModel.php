<?php
class Bill
{
    public $bill_id , $date , $paymentCondi , $emp_id , $cus_id 

    public function __construct($bill_id, $date , $paymentCondi , $emp_id , $cus_id)
    {
        $this->bill_id = $bill_id;
        $this->date = $date
        $this->paymentCondi = $paymentCondi
        $this->emp_id = $emp_id
        $this->cus_id = $cus_id
    }

    public static function getAll()
    {
        $billList = [] ;
        require("connection_connect.php");
        $sql = "SELECT * from Bill ORDER BY Bill.Bill_ID";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Bill_ID =  $my_row[Bill_ID];
            $Date = $my_row

        }

    }


}