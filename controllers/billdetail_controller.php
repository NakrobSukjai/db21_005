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
    public function addBilldetail()
    {
        $billid=$_GET['Bill_ID'];
        $productid=$_GET['Product_ID'];
        $colorid=$_GET['Color_ID'];
        $quantity=$_GET['Quantity'];
        $numcolor=$_GET['numcolor'];
        BillDetail::Add($billid,$productid,$colorid,$quantity,$numcolor);
        BillDetailController::index();
    }
    public function search(){
        $key=$_GET['key'];
        $billdetailList=BillDetail::search($key);
        require_once('views/billdetail/index_billdetail.php');
    }
}