<form method="get" action="">
    <label>ProductID <select name="P_Name">
        <?php foreach($productList as $pro){
        echo "<option value = $pro->productid";
        if($rate->productid==$pro->productid){echo " selected='selected'";}
        echo ">$pro->productid</option>";
        }?>
    </select></label><br>

    <table border="1">
    <tr><td>ProductID</td>
    <td>ProductName</td>
        <?php
            foreach ($productList as $pro) {
               echo"<tr><td>$pro->productid</td>
                <td>$pro->P_Name</td></tr>";
            }
            echo "</table>";
        ?>


    <label>Quantity <input type="number" name="Quantity"
        value="<?php echo $rate->quantity;?>"/></label><br>
    <label>RatePrice <input type="number" name="Price"
        value="<?php echo $rate->price;?>"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"
        value="<?php echo $rate->priceaddpercolor;?>"/></label><br>
    <input type="hidden" name="controller" value="rate"/>
    <input type="hidden" name="lastP_Name" value="<?php echo $rate->productid;?>"/>
    <input type="hidden" name="lastQuantity" value="<?php echo $rate->quantity;?>"/>
    <input type="hidden" name="lastPrice" value="<?php echo $rate->price;?>"/>
    <input type="hidden" name="lastPriceAddPerColor" value="<?php echo $rate->priceaddpercolor;?>"/>
    <button type="submit" name="action" value="updateRate">update</button>
    <button type="submit" name="action" value="index">Back</button>
    </form>
