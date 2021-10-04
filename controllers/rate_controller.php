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
        $rateid = $_GET['PPP_ID'];
        $quantity = $_GET['Quantity'];
        $price = $_GET['Price'];
        $priceaddpercolor = $_GET['PriceAddPerColor'];

        Rate::Add($P_Name,$rateid,$quantity,$price,$priceaddpercolor);
        RateController::index();

    }

    public function searchRate(){
        $key=$_GET['key'];
        $rateList=Rate::search($key);
        require_once('views/rate/index_Rate.php');
    }

}
?>
