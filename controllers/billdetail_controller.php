<?php 
class BillDetailController
{
    public function index()
    {
        $billdetailList=BillDetail::getAll();
        require_once('views/billdetail/index_billdetail.php');
    }
    public function newBilldetail()
    {
        $productcolorList=ProductColors::getAll();
        $productList=Product::getAll();
        $colorList=Colors::getAll();
        require_once("views/billdetail/newBilldetail.php");
    }
}