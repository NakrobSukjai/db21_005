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
    public static function get($pid,$rid,$Quantity,$rprice,$priceaddpercolor){
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrder
        INNER JOIN PPPOrders ON Product.Product_ID = PPPOrders.Product_ID
        WHERE PPPOrders.Product_ID = '$pid' AND PPPOrders.PPP_id = '$rid' AND PPPOrders.Quantity = '$Quantity' AND PPPOrders.Price = '$rprice' AND PPPOrders.PriceAddPerColor = '$priceaddpercolor'
        ORDER BY PPPOrder.Product_ID ASC";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $Product_ID=$my_row[Product_ID];
        $P_Name=$my_row[P_Name];
        $PPP_ID=$my_row[PPP_ID];
        $Quantity=$my_row[Quantity];
        $Price=$my_row[Price];
        $PriceAddPerColor=$my_row[PriceAddPerColor];
        return new PPPOrder($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor);
    }
    public static function getAll()
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrder
        INNER JOIN PPPOrders ON Product.Product_ID = PPPOrders.Product_ID
        ORDER BY PPPOrder.Product_ID ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $PPP_ID=$my_row[PPP_ID];
            $Quantity=$my_row[Quantity];
            $Price=$my_row[Price];
            $PriceAddPerColor=$my_row[PriceAddPerColor];
            $RateList[]=new PPPOrder($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor);
        }
        require("connection_close.php");
        return $RateList;
    }
    public static function search($key)
    {
        $RateList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM PPPOrder
        INNER JOIN PPPOrders ON Product.Product_ID = PPPOrders.Product_ID
        WHERE(PPPOrders.Product_ID like '%$key%' or PPPOrders.PPP_id like '%$key%' or PPPOrders.Quantity like '%$key%' or PPPOrders.Price like '%$key%' or PPPOrders.PriceAddPerColor like '%$key%')
        ORDER BY PPPOrder.Product_ID ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $Product_ID=$my_row[Product_ID];
            $P_Name=$my_row[P_Name];
            $PPP_ID=$my_row[PPP_ID];
            $Quantity=$my_row[Quantity];
            $Price=$my_row[Price];
            $PriceAddPerColor=$my_row[PriceAddPerColor];
            $RateList[]=new PPPOrder($Product_ID,$P_Name,$PPP_ID,$Quantity,$Price,$PriceAddPerColor);
        }
        require("connection_close.php");
        return $RateList;

    }

    public static function Add($pid,$rid,$rquantity,$rprice,$rpriceaddpercolor)
    {
        require("connection_connect.php");
        $sql="insert into PPPOrder(Product_ID,PPP_ID,Quantity,Price,PriceAddPerColor)values
        ('$pid','$rid','$rquantity','$rprice','$rpriceaddpercolor')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function update($bpid,$brid,$brquantity,$brprice,$brpriceaddpercolor,$apid,$arid,$arquantity,$arprice,$arpriceaddpercolor)
    {
        require("connection_connect.php");
        $sql="UPDATE PPPOeder SET PPPOeder.Product_ID='$bpid',PPPOeder.PPP_ID='$brid',PPPOeder.Quantity='$brquantity',PPPOeder.Price=$brprice,PPPOeder.PriceAddPerColor=$brpriceaddpercolor
        WHERE  PPPOeder.Product_ID='$apid' AND PPPOeder.PPP_ID='$arid' AND PPPOeder.Quantity='$arquantity' AND PPPOeder.Price=$arprice AND PriceAddPerColor=$lrpriceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($pid,$rid,$rquantity,$rprice,$rpriceaddpercolor)
    {
        require("connection_connect.php");
        $sql="DELETE FROM PPPORDER WHERE PPPOrder.Product_ID='$pid' AND PPPOrder.PPP_ID='$rid' AND PPPOrder.Quantity='$rquantity' AND PPPOrder.Price=$rprice AND PPPOrder.PriceAddPerColor=$rpriceaddpercolor";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }




} ?>
