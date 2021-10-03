<?php echo "<br>Are you sure to delete this BillDetail <br>
            <br>ProductName:$Rate->productname
            <br>Rate_ID:$Rate->rateid
            <br>Quantityนค้าที่สั่ง:$Rate->quantity  
            <br>Price:$Rate->price  
            <br>PriceAddPerColor:$Rate->priceaddpercolor<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="Rate"/>
    <input type="hidden" name="Product_ID" value="<?php echo $Rate->productid;?>"/>
    <input type="hidden" name="Rate_ID" value="<?php echo $Rate->rateid;?>"/>
    <input type="hidden" name="Quantity" value="<?php echo $Rate->quantity;?>"/>
    <input type="hidden" name="Price" value="<?php echo $Rate->price;?>"/>
    <input type="hidden" name="priceaddpercolor" value="<?php echo $Rate->priceaddpercolor;?>"/>
    <button type="submit" name="action" value="deleteBilldetail">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>