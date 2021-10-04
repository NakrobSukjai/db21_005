<?php
    $controllers =array('pages'=>['home','error'],
                        'billdetail'=>['index','newBilldetail','addBilldetail','searchBilldetail','updateFormBilldetail','updateBilldetail','deleteConfirmBilldetail','deleteBilldetail']
                        ,'bill' =>['index','newBill','addBill','search','updateFormBill','updateBill','deleteConfirm']
                        ,'rate' =>['index','newRate','addRate','searchRate','updateFormRate','updateRate','deleteConfirmRate','deleteRate']);

    function call($controller,$action)
    {
        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
            case "pages":$controller= new PagesController();
                        break;
            case "billdetail":require_once("models/billdetailModel/billdetailModel.php");
                            require_once("models/billdetailModel/productcolorModel.php");
                            require_once("models/billdetailModel/colorModel.php");
                            require_once("models/billdetailModel/productModel.php");
                            require_once("models/billdetailModel/billModel.php");
                            $controller=new BillDetailController();
                            break;
            case "bill" : require_once("models/billModel/billModel.php");
                        require_once("models/billModel/customerModel.php");
                        require_once("models/billModel/employeesModel.php");
                        $controller = new BillController();
                        break;

            case "rate" :   require_once("models/rateModel/rateModel.php");
                            require_once("models/rateModel/productModel.php");
                            $controller=new RateController();
                            break;

        }
        $controller->{$action}();
    }

    if(array_key_exists($controller,$controllers))
    {
        if(in_array($action,$controllers[$controller]))
        {
            call($controller,$action);
        }
        else
        {
            call('pages','error');
        }
    }
    else
    {
        call('pages','error');
    }
?>
