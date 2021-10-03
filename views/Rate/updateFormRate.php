<form method="get" action="">
<label>ProductName <select name="Product_ID">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>
        $pro->productname</option>";}?>
    </select></label><br>

    <label>Rate_ID <input type="number" name="PPP_ID"
        value="<?php echo $Rate->rateid;?>"/></label><br>
    <label>Quantity <input type="number" name="Quantity"
        value="<?php echo $Rate->quantity;?>"/></label><br>
    <label>RatePrice <input type="number" name="Price"
        value="<?php echo $Rate->price;?>"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"
        value="<?php echo $Rate->priceaddpercolor;?>"/></label><br>
    <input type="hidden" name="controller" value="Rate"/>
    <input type="hidden" name="lastProduct_ID" value="<?php echo $Rate->productid;?>"/>
    <input type="hidden" name="lastRate_ID" value="<?php echo $Rate->rateid;?>"/>
    <input type="hidden" name="lastQuantity" value="<?php echo $Rate->quantity;?>"/>
    <input type="hidden" name="lastPrice" value="<?php echo $Rate->price;?>"/>
    <input type="hidden" name="lastPriceAddPerColor" value="<?php echo $Rate->priceaddpercolor;?>"/>
    <button type="submit" name="action" value="updateRate">update</button>
    <button type="submit" name="action" value="index">Back</button>
    </form>
        