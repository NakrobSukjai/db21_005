<?php 
class BillDetail
{
    public $billid,$productid,$productname,$colorid,$quantity,$numcolor;
    public function __construct($Bill_ID,$Product_ID,$P_Name,$Color,$Quantity,$numcolor)
    {
        $this->billid=$Bill_ID;
        $this->productid=$Product_ID;
        $this->productname=$P_Name;
        $this->colorid=$Color;
        $this->quantity=$Quantity;
        $this->numcolor=$numcolor;
    }
    public static function getAll()
    {
        $billdetailList=[];
        require("connection_connect.php");
        $sql ="SELECT * FROM BillDetail
        INNER JOIN Product ON Product.Product_ID=BillDetail.Product_ID
        INNER JOIN Colors ON Colors.Color_ID=BillDetail.Color_ID
        ORDER BY `BillDetail`.`Bill_ID` ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Bill_ID=$my_row[Bill_ID];
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $Color=$my_row[C_Name];
            $Quantity=$my_row[Quantity];
            $numcolor=$my_row[numcolor];
            $billdetailList[]=new BillDetail($Bill_ID,$Product_ID,$P_Name,$Color,$Quantity,$numcolor);
        }
        require("connection_close.php");
        return $billdetailList;
    }
}