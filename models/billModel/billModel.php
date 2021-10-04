<?php
class Bill
{
    public $bill_id , $date , $P_Name , $emp_name , $cus_name  ;

    public function __construct($bill_id, $date , $P_Name , $emp_name , $cus_name)
    {
        $this->bill_id = $bill_id;
        $this->date = $date ;
        $this->P_Name = $P_Name;
        $this->emp_name = $emp_name;
        $this->cus_name = $cus_name;
    }

    public static function get($id,$date,$pname,$ename,$cname)
    {
        require("connection_connect.php");
        $sql = "SELECT * from Bill as b
        INNER JOIN Employees as emp ON emp.EMP_ID = b.EMP_ID
        INNER JOIN Customer as cus ON cus.Customer_ID = b.Customer_ID
        INNER JOIN PaymentCondition as pay ON pay.Pay_ID = b.Pay_ID
        where b.Bill_ID = '$id' and b.Date = '$date' and pay.Pay_Name = '$pname' and emp.E_Name = '$ename' and cus.C_Name = '$cname'
        ORDER BY b.Bill_ID ASC";
        $result = $conn -> query($sql);
        $Bill_ID =  $my_row[Bill_ID];
        $Date = $my_row[Date];
        $Pay_Name = $my_row[Pay_Name];
        $E_Name = $my_row[E_Name];
        $C_Name = $my_row[C_Name];

        return new Bill($Bill_ID,$Date,$Pay_Name,$E_Name,$C_Name);
    }

    public static function getAll()
    {
        $billList = [] ;
        require("connection_connect.php");
        $sql = "SELECT * from Bill as b
        INNER JOIN Employees as emp ON emp.EMP_ID = b.EMP_ID
        INNER JOIN Customer as cus ON cus.Customer_ID = b.Customer_ID
        INNER JOIN PaymentCondition as pay ON pay.Pay_ID = b.Pay_ID
        ORDER BY b.Bill_ID ASC";
        $result = $conn -> query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Bill_ID =  $my_row[Bill_ID];
            $Date = $my_row[Date];
            $Pay_Name = $my_row[Pay_Name];
            $E_Name = $my_row[E_Name];
            $C_Name = $my_row[C_Name];
            $billList[] = new Bill($Bill_ID,$Date,$Pay_Name,$E_Name,$C_Name);
        }
        require("connection_close.php");
        return $billList ;

    }

    public static function Add($billid , $date , $pay , $emp , $cus)
    {
        require("connection_connect.php");
        $sql="insert into Bill(Bill_ID,Date,Pay_ID,EMP_ID,Customer_ID)values
        ('$billid','$date','$pay','$emp','$cus')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }

    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * from Bill as b
        INNER JOIN Employees as emp ON emp.EMP_ID = b.EMP_ID
        INNER JOIN Customer as cus ON cus.Customer_ID = b.Customer_ID
        INNER JOIN PaymentCondition as pay ON pay.Pay_ID = b.Pay_ID
        WHERE (b.Bill_ID like '%$key%' or emp.E_Name like '%$key%' or pay.Pay_Name like '%$key%'
        or b.Date like '%$key%' or cus.C_Name like '%$key%')
        ORDER BY b.Bill_ID ASC";
        $result = $conn -> query($sql);
        while($my_row = $result -> fetch_assoc())
        {
            $Bill_ID =  $my_row[Bill_ID];
            $Date = $my_row[Date];
            $Pay_Name = $my_row[Pay_Name];
            $E_Name = $my_row[E_Name];
            $C_Name = $my_row[C_Name];
            
            $billList[] = new Bill($Bill_ID,$Date,$Pay_Name,$E_Name,$C_Name);
        }
        require("connection_close.php");
        return $billList;

    }

    public static function update($billid,$date,$pname,$cusname,$empname)
    {
        require("connection_connect.php");
        $sql = "UPDATE Bill SET Bill.Bill_ID = '$billid' , Bill.Date = '$date' , Bill.PaymentCondition = '$pname' , Bill.C_Name = '$cusname' , Bill.E_Name = '$empname' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    
    public static function delete($billid,$date,$pname,$empname,$cusname)
    {
        require_once("connection_connect.php");
        $sql = "DELETE FROM Bill where Bill_ID = '$billid' , Bill.Date = '$date' , Bill.Pay_Name = '$pname' , Bill.C_Name = '$cusname' , Bill.E_Name = '$empname'";
        $result = $conn -> query ($sql);
        require("connection_close.php");
        return "delete success $result row";

    }


}
?>