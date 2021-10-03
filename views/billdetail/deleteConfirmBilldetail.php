<?php echo "<br>Are you sure to delete this BillDetail <br>
            <br> รหัสใบสั่งซื้อ:$billdetail->billid 
            <br>ชื่อสินค้า:$billdetail->productname 
            <br>สี:$billdetail->colorname 
            <br>จำนวนสินค้าที่สั่ง:$billdetail->quantity 
            <br>จำนวนสี:$billdetail->numcolor<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="billdetail"/>
    <input type="hidden" name="Bill_ID" value="<?php echo $billdetail->billid;?>"/>
    <input type="hidden" name="Product_ID" value="<?php echo $billdetail->productid;?>"/>
    <input type="hidden" name="Color_ID" value="<?php echo $billdetail->colorid;?>"/>
    <input type="hidden" name="Quantity" value="<?php echo $billdetail->quantity;?>"/>
    <input type="hidden" name="numcolor" value="<?php echo $billdetail->numcolor;?>"/>
    <button type="submit" name="action" value="deleteBilldetail">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>