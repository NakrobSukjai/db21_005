<?php
class Product{
    public $productid,$productname;
    public function __construct($P_ID,$P_Name)
    {
        $this->productid=$P_ID;
        $this->productname=$P_Name;
    }
    public static function getAll()
    {
        $productList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM Product ORDER BY Product.Product_ID";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $P_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $productList[]=new ProductColors($P_ID,$P_Name);
        }
        require("connection_close.php");
        return $productList;
    }
}
?>