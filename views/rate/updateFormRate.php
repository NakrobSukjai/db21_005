<form method="get" action="">
<label>ProductName <select name="P_Name">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>$pro->P_Name</option>";}?>
    </select></label><br>

    <label>Rate_ID <input type="number" name="PPP_ID"
        value="<?php echo $rate->rateid;?>"/></label><br>
    <label>Quantity <input type="number" name="Quantity"
        value="<?php echo $rate->quantity;?>"/></label><br>
    <label>RatePrice <input type="number" name="Price"
        value="<?php echo $rate->price;?>"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"
        value="<?php echo $rate->priceaddpercolor;?>"/></label><br>
    <input type="hidden" name="controller" value="rate"/>
    <input type="hidden" name="lastP_Name" value="<?php echo $rate->P_Name;?>"/>
    <input type="hidden" name="lastPPP_ID" value="<?php echo $rate->rateid;?>"/>
    <input type="hidden" name="lastQuantity" value="<?php echo $rate->quantity;?>"/>
    <input type="hidden" name="lastPrice" value="<?php echo $rate->price;?>"/>
    <input type="hidden" name="lastPriceAddPerColor" value="<?php echo $rate->priceaddpercolor;?>"/>
    <button type="submit" name="action" value="updateRate">update</button>
    <button type="submit" name="action" value="index">Back</button>
    </form>
