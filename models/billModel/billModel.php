<?php
class Bill
{
    public $bill_id , $date , $P_Name , $emp_name , $cus_name 

    public function __construct($bill_id, $date , $P_Name , $emp_name , $cus_name)
    {
        $this->bill_id = $bill_id;
        $this->date = $date
        $this->P_Name = $P_Name
        $this->emp_name = $emp_name
        $this->cus_name = $cus_name
    }

    public static function getAll()
    {
        $billList = [] ;
        require("connection_connect.php");
        $sql = "SELECT * from Bill as b
        INNER JOIN Employees as emp ON emp.EMP_ID = b.EMP_ID
        INNER JOIN Customer as cus ON cus.Customer_ID = b.Customer_ID
        ORDER BY b.Bill_ID ASC";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Bill_ID =  $my_row[Bill_ID];
            $Date = $my_row[Date];
            $Pay_Name = $my_row[Pay_Name];
            $E_Name = $my_row[E_Name];
            $C_Name = $my_row[C_Name]
            $billList[] = new Bill($Bill_ID,$Date,$Pay_Name,$E_Name,$C_Name);
        }
        require("connection_close.php")
        return $billList ;

    }


}