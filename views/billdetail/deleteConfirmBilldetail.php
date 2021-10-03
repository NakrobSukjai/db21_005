<?php echo "<br>Are you sure to delete this BillDetail <br>
            <br> $billdetail->billid $billdetail->productname $billdetail->colorname<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="billdetail"/>
    <input type="hidden" name="Bill_ID" value="<?php echo $billdetail->billid;?>"/>
    <button type="submit" name="action" value="deleteBilldetail">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>