<?php 
class BillDetail
{
    public $billid,$productid,$productname,$colorid,$colorname,$quantity,$numcolor;
    public function __construct($Bill_ID,$Product_ID,$P_Name,$Color,$colorname,$Quantity,$numcolor)
    {
        $this->billid=$Bill_ID;
        $this->productid=$Product_ID;
        $this->productname=$P_Name;
        $this->colorid=$Color;
        $this->colorname=$colorname;
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
            $Color=$my_row[Color_ID];
            $colorname=$my_row[C_Name];
            $Quantity=$my_row[Quantity];
            $numcolor=$my_row[numcolor];
            $billdetailList[]=new BillDetail($Bill_ID,$Product_ID,$P_Name,$Color,$colorname,$Quantity,$numcolor);
        }
        require("connection_close.php");
        return $billdetailList;
    }
    public static function Add($billid,$productid,$colorid,$quantity,$numcolor)
    {
        require("connection_connect.php");
        $sql="insert into BillDetail(Bill_ID,Product_ID,Color_ID,Quantity,numcolor)values
        ('$billid','$productid','$colorid','$quantity','$numcolor')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql ="SELECT * FROM BillDetail
        INNER JOIN Product ON Product.Product_ID=BillDetail.Product_ID
        INNER JOIN Colors ON Colors.Color_ID=BillDetail.Color_ID
        where(BillDetail.Bill_ID like '%$key%' or Product.Product_ID like '%$key%' or 
        Product.P_Name like '%$key%' or Colors.Color_ID like '%$key%' orColors.C_Name like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Bill_ID=$my_row[Bill_ID];
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $Color=$my_row[Color_ID];
            $colorname=$my_row[C_Name];
            $Quantity=$my_row[Quantity];
            $numcolor=$my_row[numcolor];
            $billdetailList[]=new BillDetail($Bill_ID,$Product_ID,$P_Name,$Color,$colorname,$Quantity,$numcolor);
        }
        require("connection_close.php");
        return $billdetailList;
    }
}