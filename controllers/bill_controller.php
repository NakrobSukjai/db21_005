<?php

class BillController
{
    public function index()
    {
        $billList=Bill::getAll();
        require_once('views/bill/index_Bill.php');
    }
    public function newBill()
    {
        $CustomerList = Customer::getAll();
        $empList = Employees::getAll();
        require_once('views/bill/newBill.php');
    }

    public function addBill()
    {
        $Bill_ID = $_GET['Bill_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $Customer = $_GET['C_name'];
        $Emp = $_GET['E_name'];

        Bill::Add($Bill_ID,$Date,$Pay_Name,$Customer,$Emp);
        BillController::index();
    }

    public function search()
    {
        $key = $_GET['key'];
        $billList = Bill::search($key);
        require_once('views/bill/index_Bill.php');
    }

    public function updateForm()
    {
        $Bill_ID = $_GET['Bill_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $cus = $_GET['C_name'];
        $emp = $_GET['E_name'];

        $empList = Employees::getALL();
        $CustomerList = Customer::getAll();
        $bill = Bill::get($Bill_ID,$Date,$Pay_Name,$emp,$cus);
       require_once('views/bill/updateBill.php');

    }

    public function updateBill()
    {
        $Bill_ID = $_GET['Bill_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $cus = $_GET['C_name'];
        $emp = $_GET['E_name'];

        Bill::update($Bill_ID,$Date,$Pay_Name,$cus,$emp);
        BillController::index();
    }

    public function deleteConfirm()
    {
        $Bill_ID = $_GET['Bill_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $cus = $_GET['C_name'];
        $emp = $_GET['E_name'];

        $bill = Bill::get($Bill_ID,$Date,$Pay_Name,$emp,$cus);
        require_once('views/bill/deleteConfirmBill.php');

    }

    public function deleteBill()
    {
        $Bill_ID = $_GET['Bill_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $cus = $_GET['C_name'];
        $emp = $_GET['E_name'];

        Bill::delete($Bill_ID,$Date,$Pay_Name,$emp,$cus);
        BillController::index();

    }


}
