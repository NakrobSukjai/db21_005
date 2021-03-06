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
        $rateList=[];
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
            $rateList[]=new Rate($productid,$P_Name,$rateid,$quantity,$price,$priceAddPerColor);
        }
        require("connection_close.php");
        return $rateList;
}

    public static function Add($productid,$quantity,$price,$priceaddpercolor)
    {
        require("connection_connect.php");
        $sql="insert into PPPOrders(PPPOrders.Product_ID,Quantity,Price,PriceAddPerColor) values
        ('$productid','$quantity','$price','$priceaddpercolor')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function search($key)
    {
        $rateList=[];
        require("connection_connect.php");
        $sql = "SELECT Product.Product_ID , Product.P_Name , PPP_ID , Quantity , Price , PriceAddPerColor
        FROM PPPOrders
        INNER JOIN Product ON Product.Product_ID = PPPOrders.Product_ID
        WHERE(PPPOrders.Product_ID like '%$key%' or Product.P_Name like '%$key%' or PPPOrders.PPP_ID like '%$key%' or PPPOrders.Quantity like '%$key%' or PPPOrders.Price like '%$key%' or PPPOrders.PriceAddPerColor like '%$key%')
        ORDER BY PPPOrders.Product_ID ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $productid=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $rateid=$my_row[PPP_ID];
            $quantity=$my_row[Quantity];
            $price=$my_row[Price];
            $priceaddpercolor=$my_row[PriceAddPerColor];
            $rateList[]=new Rate($productid,$P_Name,$rateid,$quantity,$price,$priceaddpercolor);
        }
        require("connection_close.php");
        return $rateList;

    }

    public static function get($productid,$quantity,$price,$priceaddpercolor){
        require("connection_connect.php");
        $sql = "SELECT Product.Product_ID , PPP_ID , Quantity , Price , PriceAddPerColor
        FROM PPPOrders
        INNER JOIN Product ON Product.Product_ID = PPPOrders.Product_ID
        WHERE Product.Product_ID = '$productid' AND PPPOrders.Quantity = '$quantity' AND PPPOrders.Price = '$price' AND PPPOrders.PriceAddPerColor = '$priceaddpercolor'
        ORDER BY PPPOrders.Product_ID ASC";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $productid=$my_row[Product_ID];
        $P_Name=$my_row[P_Name];
        $rateid=$my_row[PPP_ID];
        $quantity=$my_row[Quantity];
        $price=$my_row[Price];
        $priceaddpercolor=$my_row[PriceAddPerColor];
        return new Rate($productid,$P_Name,$rateid,$quantity,$price,$priceaddpercolor);
    }

    public static function update($P_Name,$quantity,$price,$priceaddpercolor,$lastP_Name,$lastquantity,$lastprice,$lastpriceaddpercolor)
    {
        require("connection_connect.php");
        $sql="UPDATE PPPOrders SET PPPOrders.Product_ID='$P_Name',PPPOrders.Quantity=$quantity ,PPPOrders.Price=$price,PPPOrders.PriceAddPerColor=$priceaddpercolor
        WHERE  PPPOrders.Product_ID='$lastP_Name'AND PPPOrders.Quantity=$lastquantity AND PPPOrders.Price=$lastprice AND PPPOrders.PriceAddPerColor=$lastpriceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }


    public static function delete($P_Name,$quantity,$price,$priceaddpercolor)
    {
        require("connection_connect.php");
        $sql="DELETE FROM PPPOrders WHERE PPPOrders.Product_ID='$P_Name' AND PPPOrders.Quantity='$quantity' AND PPPOrders.Price=$price AND PPPOrders.PriceAddPerColor=$priceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>
