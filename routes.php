<?php
    $controllers =array('pages'=>['home','error'],'billdetail'=>['index','newBilldetail']);

    function call($controller,$action)
    {
        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
            case "pages":$controller= new PagesController();
                        break;
            case "billdetail":require_once("models/billdetailModel.php");
                            require_once("models/productcolorModel.php");
                            require_once("models/productModel.php");
                            require_once("models/colorModel.php");
                        $controller=new BillDetailController();
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