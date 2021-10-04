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
        $colorList=Color::getAll();
        $billList=Bill::getAll();
        $productList=Products::getAll();
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
    public function searchBilldetail(){
        $key=$_GET['key'];
        $billdetailList=BillDetail::search($key);
        require_once('views/billdetail/index_billdetail.php');
    }
    public function updateFormBilldetail()
    {
        $billid=$_GET['Bill_ID'];
        $productid=$_GET['Product_ID'];
        $colorid=$_GET['Color_ID'];
        $quantity=$_GET['Quantity'];
        $numcolor=$_GET['numcolor'];
        $colorList=Color::getAll();
        $billList=Bill::getAll();
        $productList=Products::getAll();
        $billdetail=BillDetail::get($billid,$productid,$colorid,$quantity,$numcolor);
        $productcolorList=ProductColors::getAll();
        require_once('views/billdetail/updateFormBilldetail.php');
    }
    public function updateBilldetail()
    {
        $billid=$_GET['Bill_ID'];
        $productid=$_GET['Product_ID'];
        $colorid=$_GET['Color_ID'];
        $quantity=$_GET['Quantity'];
        $numcolor=$_GET['numcolor'];
        $lastbillid=$_GET['lastBill_ID'];
        $lastproductid=$_GET['lastProduct_ID'];
        $lastcolorid=$_GET['lastColor_ID'];
        $lastquantity=$_GET['lastQuantity'];
        $lastnumcolor=$_GET['lastnumcolor'];
        BillDetail::update($billid,$productid,$colorid,$quantity,$numcolor,$lastbillid,$lastproductid,$lastcolorid,$lastquantity,$lastnumcolor);
        BillDetailController::index();
    }
    public function deleteConfirmBilldetail()
    {
        $billid=$_GET['Bill_ID'];
        $productid=$_GET['Product_ID'];
        $colorid=$_GET['Color_ID'];
        $quantity=$_GET['Quantity'];
        $numcolor=$_GET['numcolor'];
        $billdetail=BillDetail::get($billid,$productid,$colorid,$quantity,$numcolor);
        require_once('views/billdetail/deleteConfirmBilldetail.php');
    }
    public function deleteBilldetail()
    {
        $billid=$_GET['Bill_ID'];
        $productid=$_GET['Product_ID'];
        $colorid=$_GET['Color_ID'];
        $quantity=$_GET['Quantity'];
        $numcolor=$_GET['numcolor'];
        BillDetail::delete($billid,$productid,$colorid,$quantity,$numcolor);
        BillDetailController::index();
    }
}