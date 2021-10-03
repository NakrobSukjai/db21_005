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




}