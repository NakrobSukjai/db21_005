<form method="get" action="">
    <label>P_Name <select name="Product_ID">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>
        $pro->P_Name</option>";}?>
    </select></label><br>

    <label>Rate_ID <input type="number" name="PPP_ID"/></label><br>
    <label>Quantity <input type="number" name="Quantity"/></label><br>
    <label>RatePrice <input type="number" name="Price"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"/></label><br>
    <input type="hidden" name="controller" value="Rate"/>
    <button type="submit" name="action" value="addRate">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
