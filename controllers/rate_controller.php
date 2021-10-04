<?php
class RateController{
     public function index()
    {
        $rateList=Rate::getAll();
        require_once('views/rate/index_Rate.php');
    }
        public function newRate()
    {
        $productList = Product::getAll();
        require_once('views/rate/newRate.php');
    }


        public function addRate()
    {
        $P_Name = $_GET['P_Name'];
        $quantity = $_GET['Quantity'];
        $price = $_GET['Price'];
        $priceaddpercolor = $_GET['PriceAddPerColor'];

        Rate::Add($P_Name,$quantity,$price,$priceaddpercolor);
        RateController::index();

    }

    public function searchRate(){
        $key=$_GET['key'];
        $rateList=Rate::search($key);
        require_once('views/rate/index_Rate.php');
    }

    public function updateFormRate()
    {
        $P_Name=$_GET['P_Name'];
        $rateid=$_GET['PPP_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $productList=Product::getAll();
        $rate=Rate::get($P_Name,$rateid,$quantity,$price,$priceaddpercolor);
        require_once('views/rate/updateFormRate.php');
    }

    public function updateRate()
    {
        $P_Name=$_GET['P_Name'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['lastPriceAddPerColor'];
        $lastP_Name=$_GET['lastP_Name'];
        $lastrateid=$_GET['lastPPP_ID'];
        $lastquantity=$_GET['lastQuantity'];
        $lastprice=$_GET['lastPrice'];
        $lastpriceaddpercolor=$_GET['lastPriceAddPerColor'];
        Rate::update($P_Name,$rateid,$quantity,$price,$priceaddpercolor,$lastP_Name,$lastrateid,$lastquantity,$lastprice,$lastpriceaddpercolor);
        RateController::index();
    }

}
?>
