<?php
class RateModel{
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
    public static function get($productid,$rateid,$Quantity,$price,$priceaddpercolor){
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrders
        
        WHERE PPPOrders.Product_ID = '$productid' AND PPPOrders.PPP_id = '$rateid' AND PPPOrders.Quantity = '$Quantity' AND PPPOrders.Price = '$price' AND PPPOrders.PriceAddPerColor = '$priceaddpercolor'
        ORDER BY PPPOrders.Product_ID ASC";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Product_ID=$my_row[Product_ID];
        $P_Name=$my_row[P_Name];
        $PPP_ID=$my_row[PPP_ID];
        $Quantity=$my_row[Quantity];
        $Price=$my_row[Price];
        $PriceAddPerColor=$my_row[PriceAddPerColor];
        return new RateModel($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor);
    }
    public static function getAll()
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrders
        
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
    public static function search($key)
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrders
        
        WHERE(PPPOrders.Product_ID like '%$key%' or PPPOrders.PPP_ID like '%$key%' or PPPOrders.Quantity like '%$key%' or PPPOrders.Price like '%$key%' or PPPOrders.PriceAddPerColor like '%$key%')
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

    public static function Add($productid,$rateid,$quantity,$price,$priceaddpercolor)
    {
        require("connection_connect.php");
        $sql="insert into PPPOrders(Product_ID,PPP_ID,Quantity,Price,PriceAddPerColor)values
        ('$productid','$rateid','$quantity','$price','$priceaddpercolor')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($productid,$rateid,$quantity,$price,$priceaddpercolor,$lastproductid,$lastrateid,$lastquantity,$lastprice,$lastpriceaddpercolor)
    {
        require("connection_connect.php");
        $sql="UPDATE PPPOeders SET PPPOeders.Product_ID='$productid',PPPOeders.PPP_ID='$rateid',PPPOeders.Quantity='$quantity',PPPOeders.Price=$price,PPPOeders.PriceAddPerColor=$priceaddpercolor
        WHERE  PPPOeders.Product_ID='$lastproductid' AND PPPOeders.PPP_ID='$lastrateid' AND PPPOeders.Quantity='$lastquantity' AND PPPOeders.Price=$lastprice AND PriceAddPerColor=$lrpriceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($productid,$rateid,$quantity,$price,$priceaddpercolor)
    {
        require("connection_connect.php");
        $sql="DELETE FROM PPPOrders WHERE PPPOrders.Product_ID='$productid' AND PPPOrders.PPP_ID='$rateid' AND PPPOrders.Quantity='$quantity' AND PPPOrders.Price=$price AND PPPOrders.PriceAddPerColor=$priceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }




} ?>
