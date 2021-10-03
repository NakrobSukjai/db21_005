<?php 
class RateController
{
    public function index()
    {
        $RateList=RateModel::getAll();
        require_once('views/Rate/index_Rate.php');
    }
    public function newRate()
    {
        $productList=Product::getAll();
        require_once("views/Rate/newRate.php");
    }
    public function addRate()
    {
        $productid=$_GET['Product_ID'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        RateModel::Add($productid,$rateid,$quantity,$price,$priceaddpercolor);
        RateController::index();
    }
    public function searchRate(){
        $key=$_GET['key'];
        $RateList=RateModel::search($key);
        require_once('views/Rate/index_Rate.php');
    }
    public function updateFormRate()
    {
        $productid=$_GET['Product_ID'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['PriceAddPerColor'];
        $productList=Product::getAll();
        $Rate=RateModel::get($productid,$rateid,$quantity,$price,$priceaddpercolor);
        require_once('views/Rate/updateFormRate.php');
    }
    public function updateRate()
    {
        $productid=$_GET['Product_ID'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['lastPriceAddPerColor'];
        $lastproductid=$_GET['lastProduct_ID'];
        $lastrateid=$_GET['lastRate_ID'];
        $lastquantity=$_GET['lastQuantity'];
        $lastprice=$_GET['lastPrice'];
        $lastpriceaddpercolor=$_GET['lastPriceAddPerColor'];
        RateModel::update($productid,$rateid,$quantity,$price,$priceaddpercolor,$lastproductid,$lastrateid,$lastquantity,$lastprice,$lastpriceaddpercolor);
        RateController::index();
    }
    public function deleteConfirmRate()
    {
        $productid=$_GET['Product_ID'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['lastPriceAddPerColor'];
        $Rate=RateModel::get($productid,$rateid,$quantity,$price,$priceaddpercolor);
        require_once('views/Rate/deleteConfirmRate.php');
    }
    public function deleteRate()
    {
        $productid=$_GET['Product_ID'];
        $rateid=$_GET['Rate_ID'];
        $quantity=$_GET['Quantity'];
        $price=$_GET['Price'];
        $priceaddpercolor=$_GET['lastPriceAddPerColor'];
        RateModel::delete($productid,$rateid,$quantity,$price,$priceaddpercolor);
        RateController::index();
    }
}