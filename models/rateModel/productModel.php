<?php
class Product{
    public $productid,$P_Name;
    public function __construct($productid,$P_Name)
    {
        $this->productid=$productid;
        $this->P_Name=$P_Name;
    }
    public static function getAll()
    {
        $productList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM Product ORDER BY Product.Product_ID";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $productid=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $productList[]=new Product($productid,$P_Name);
        }
        require("connection_close.php");
        return $productList;
    }
}
?>
