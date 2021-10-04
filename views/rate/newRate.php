<form method="get" action="">
    <label>ProductID <select name="Producr_ID">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>$pro->P_Name</option>";}?>
    </select></label><br>

    <tr><td>ProductID</td>
    <td>ProductName</td>
        <?php
            foreach ($productList as $pro) {
               echo"<tr><td>$pro->productid</td>
                <td>$pro->cP_Name</td></tr>";
            }
            echo "</table>";
        ?>


    <label>Quantity <input type="number" name="Quantity"/></label><br>
    <label>RatePrice <input type="number" name="Price"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"/></label><br>
    <input type="hidden" name="controller" value="rate"/>
    <button type="submit" name="action" value="addRate">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
