<?php
class Product{
    public $productid,$productname;
    public function __construct($Product_ID,$P_Name)
    {
        $this->productid=$Product_ID;
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
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $productList[]=new Product($Product_ID,$P_Name);
        }
        require("connection_close.php");
        return $productList;
    }
}
?>