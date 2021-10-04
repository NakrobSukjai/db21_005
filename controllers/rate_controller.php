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
        $productid = $_GET['P_Name'];
        $quantity = $_GET['Quantity'];
        $price = $_GET['Price'];
        $priceaddpercolor = $_GET['PriceAddPerColor'];

        Rate::Add($productid,$quantity,$price,$priceaddpercolor);
        RateController::index();

    }

    public function searchRate(){
        $key=$_GET['key'];
        $rateList=Rate::search($key);
        require_once('views/rate/index_Rate.php');
    }

    public function updateFormRate()
    {
        $productid=$_GET['P_Name'];

        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $productList=Product::getAll();
        $rate=Rate::get($productid,$quantity,$price,$priceaddpercolor);
        require_once('views/rate/updateFormRate.php');
    }

    public function updateRate()
    {
        $productid=$_GET['P_Name'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['lastPriceAddPerColor'];
        $lastproductid=$_GET['lastP_Name'];
        $lastrateid=$_GET['lastPPP_ID'];
        $lastquantity=$_GET['lastQuantity'];
        $lastprice=$_GET['lastPrice'];
        $lastpriceaddpercolor=$_GET['lastPriceAddPerColor'];
        Rate::update($productid,$quantity,$price,$priceaddpercolor,$lastproductid,$lastrateid,$lastquantity,$lastprice,$lastpriceaddpercolor);
        RateController::index();
    }

}
?>
