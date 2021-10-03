<?php

class BillController 
{
    public function index()
    {
        $billList=Bill::getAll();
        require_once('views/bill/index_Bill.php');
    }



}