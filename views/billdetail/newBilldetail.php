<form method="get" action="">
    <label>รหัสใบสั่งซื้อ <select name="Bill_ID">
        <?php foreach($billList as $bill)
        {echo "<option value=$bill->billid>$bill->billid</option>";}?>
        </select></label><br>
    <table border="1">
    รายชื่อและสีของสินค้า<br>
    <tr><td>ชื่อสินค้า</td>
    <td>สีของสินค้า</td>
        <?php
            foreach ($productcolorList as $pro) {
               echo"<tr><td>$pro->productname</td>
                <td>$pro->colorname</td></tr>";
            }
            echo "</table>";
        ?>
    <label>สินค้า <select name="Product_ID">
    <?php foreach($productList as $pro){
        echo "<option value = $pro->productid>
        $pro->productname</option>";}?>
    </select></label><br>

    <label>สีของสินค้า <select name="Color_ID">
        <?php foreach($colorList as $color)
        {echo "<option value=$color->colorid>$color->colorname</option>";}?>
    </select></label><br>
    <label>จำนวนสินค้า <input type="number" name="Quantity"/></label><br>
    <label>จำนวนสีที่ต้องการ <input type="number" name="numcolor"/></label><br>
    <input type="hidden" name="controller" value="billdetail"/>
    <button type="submit" name="action" value="addBilldetail">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>