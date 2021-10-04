<?php
class RateController{
     public function index()
    {
        $billList=Bill::getAll();
        require_once('views/rate/index_Rate.php');
    }
}
