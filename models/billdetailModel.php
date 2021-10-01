<?php 
class BillDetail
{
    public $billid,$productid,$colorid,$quantity,$numcolor;
    public function __construct($Bill_ID,$Product_ID,$Color,$Quantity,$numcolor)
    {
        $this->billid=$Bill_ID;
        $this->productid=$Product_ID;
        $this->colorid=$Color;
        $this->quantity=$Quantity;
        $this->numcolor=$numcolor;
    }
    public static function getAll()
    {
        $billdetailList=[];
        require("connection_connect.php");
        $sql ="select * from BillDetail";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Bill_ID=$my_row[Bill_ID];
            $Product_ID=$my_row[Product_ID];
            $Color=$my_row[Color_ID];
            $Quantity=$my_row[Quantity];
            $numcolor=$my_row[numcolor];
            $billdetailList[]=new BillDetail($Bill_ID,$Product_ID,$Color,$Quantity,$numcolor);
        }
        require("connection_close.php");
        return $billdetailList;
    }
}