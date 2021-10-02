<?php
class ProductColors{
    public $productid,$productname,$colorid,$colorname;
    public function __construct($P_ID,$P_Name,$C_ID,$C_Name)
    {
        $this->productid=$P_ID;
        $this->productname=$P_Name;
        $this->colorid=$C_ID;
        $this->colorname=$C_Name;
    }
    public static function getAll()
    {
        $productcolorsList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM ProductColors
        INNER JOIN Product ON Product.Product_ID=ProductColors.Product_ID
        INNER JOIN Colors ON Colors.Color_ID=ProductColors.Color_ID
        ORDER BY ProductColors.Product_ID";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $P_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $C_ID=$my_row[Color_ID];
            $C_Name=$my_row[C_Name];
            $productcolorsList[]=new ProductColors($P_ID,$P_Name,$C_ID,$C_Name);
        }
        require("connection_close.php");
        return $productcolorsList;
    }
}
?>