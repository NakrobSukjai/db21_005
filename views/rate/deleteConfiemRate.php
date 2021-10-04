<?php echo "<br>Are you sure to delete this BillDetail <br>
            <br>Product_ID:$rate->productid
            <br>Quantity:$rate->quantity
            <br>Price:$rate->price
            <br>PriceAddPerColor:$rate->priceaddpercolor<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="rate"/>
    <input type="hidden" name="Product_ID" value="<?php echo $rate->productid;?>"/>
    <input type="hidden" name="Quantity" value="<?php echo $rate->quantity;?>"/>
    <input type="hidden" name="Price" value="<?php echo $rate->price;?>"/>
    <input type="hidden" name="priceaddpercolor" value="<?php echo $rate->priceaddpercolor;?>"/>
    <button type="submit" name="action" value="deleteBilldetail">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
