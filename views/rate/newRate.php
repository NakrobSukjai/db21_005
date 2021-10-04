<form method="get" action="">
    <label>ProductID <select name="Product_ID">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->P_Name>$pro->productid</option>";}?>
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


    <label>Quantity <input type="number" name="Quantity"/></label><br>
    <label>RatePrice <input type="number" name="Price"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"/></label><br>
    <input type="hidden" name="controller" value="rate"/>
    <button type="submit" name="action" value="addRate">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
