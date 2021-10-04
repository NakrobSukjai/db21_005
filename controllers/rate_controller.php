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
        $Product_ID = $_GET['Product_ID'];
        $quantity = $_GET['Quantity'];
        $price = $_GET['Price'];
        $priceaddpercolor = $_GET['PriceAddPerColor'];

        Rate::Add($Product_ID,$quantity,$price,$priceaddpercolor);
        RateController::index();

    }

    public function searchRate(){
        $key=$_GET['key'];
        $rateList=Rate::search($key);
        require_once('views/rate/index_Rate.php');
    }

    public function updateFormRate()
    {
        $Product_ID=$_GET['Product_ID'];

        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $productList=Product::getAll();
        $rate=Rate::get($Product_ID,$quantity,$price,$priceaddpercolor);
        require_once('views/rate/updateFormRate.php');
    }

    public function updateRate()
    {
        $Product_ID=$_GET['Product_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $lastP_Name=$_GET['lastP_Name'];
        $lastquantity=$_GET['lastQuantity'];
        $lastprice=$_GET['lastPrice'];
        $lastpriceaddpercolor=$_GET['lastPriceAddPerColor'];
        Rate::update($Product_ID,$quantity,$price,$priceaddpercolor,$lastP_Name,$lastquantity,$lastprice,$lastpriceaddpercolor);
        RateController::index();
    }

    public function deleteConfirmRate()
    {
        $productid=$_GET['Product_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $rate=Rate::get($productid,$quantity,$price,$priceaddpercolor);
        require_once('views/rate/deleteConfirmRate.php');
    }
    public function deleteRate()
    {
        $productid=$_GET['Product_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        Rate::delete($productid,$quantity,$price,$priceaddpercolor);
        RateController::index();
    }

}
?>
