<?php
class Rate{
    public $productid;
    public $productname;
    public $rateid;
    public $Quantity;
    public $price;
    public $priceaddpercolor;

    public function __construct($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor){
        $this->productid = $Product_ID;
        $this->productname = $P_Name;
        $this->rateid = $PPP_ID;
        $this->Quantity = $Quantity;
        $this->price = $Price;
        $this->priceaddpercolor = $PriceAddPerColor;
    }
 
    public static function getAll()
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrders
        INNER JOIN Product ON Product.Product_ID = PPPOrders.Product_ID
        ORDER BY PPPOrders.Product_ID ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $PPP_ID=$my_row[PPP_ID];
            $Quantity=$my_row[Quantity];
            $Price=$my_row[Price];
            $PriceAddPerColor=$my_row[PriceAddPerColor];
            $RateList[]=new RateModel($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor);
        }
        require("connection_close.php");
        return $RateList;
    }
 
} ?>
