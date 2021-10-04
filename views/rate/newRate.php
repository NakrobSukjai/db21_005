<form method="get" action="">
    <label>ProductName <select name="P_Name">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>$pro->P_Name</option>";}?>
    </select></label><br>


    <label>Quantity <input type="number" name="Quantity"/></label><br>
    <label>RatePrice <input type="number" name="Price"/></label><br>
    <label>PriceAddPerColor <input type="number" name="PriceAddPerColor"/></label><br>
    <input type="hidden" name="controller" value="rate"/>
    <button type="submit" name="action" value="addRate">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
