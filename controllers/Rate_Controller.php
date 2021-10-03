<?php 
class RateController
{
    public function index()
    {
        $RateList=Rate::getAll();
        require_once('views/Rate/index_Rate.php');
    }
    public function newRate()
    {
        $productList=Product::getAll();
        require_once("views/Rate/newRate.php");
    }

}