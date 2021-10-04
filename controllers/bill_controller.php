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
        $Bill_ID = $_GET['BILL_ID'];
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
        $Bill_ID = $_GET['BILL_ID'];
        $Date = $_GET['Date'];
        $Pay_Name = $_GET['Pay_Name'];
        $Customer = $_GET['C_name'];
        $Emp = $_GET['E_name'];

        $empList = Employees::getALL();
        $CustomerList = Customer::getAll();
        $billList = Bill::getAll();
        require_once('views/bill/updateBill.php');

    }


}
