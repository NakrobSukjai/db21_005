<?php

class Rate{
        public $productid , $P_Name , $rateid , $quantity , $price , $priceaddpercolor  ;

    public function __construct($productid , $P_Name , $rateid , $quantity , $price , $priceaddpercolor)
    {
        $this->productid = $productid;
        $this->P_Name = $P_Name;
        $this->rateid = $rateid;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->priceaddpercolor = $priceaddpercolor;
    }

    public static function getAll()
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT Product.Product_ID , Product.P_Name , PPP_ID , Quantity , Price , PriceAddPerColor
        FROM PPPOrders
        INNER JOIN Product ON Product.Product_ID = PPPOrders.Product_ID
        ORDER BY PPPOrders.Product_ID ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $productid=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $rateid=$my_row[PPP_ID];
            $quantity=$my_row[Quantity];
            $price=$my_row[Price];
            $priceAddPerColor=$my_row[PriceAddPerColor];
            $RateList[]=new Rate($productid,$P_Name,$rateid,$quantity,$price,$priceAddPerColor);
        }
        require("connection_close.php");
        return $RateList;
}


