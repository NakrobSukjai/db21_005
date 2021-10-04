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
        $Customer = $_GET['C_name'];
        $Emp = $_GET['E_name'];

        Bill::Add($Bill_ID,$Date,$Customer,$Emp);
        BillController::index();





    }


}
