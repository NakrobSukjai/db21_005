<form method="get" action="">
    <label>รหัสใบสั่งซื้อ <select name="Bill_ID">
        <?php foreach($billdetailList as $billdetail)
        {echo "<option value=$billdetail->billid>$billdetail->billid</option>";}?>
        </select></label><br>
    <label>ชื่อสินค้า<select name="Product_ID">
            <?php foreach($productList as $product)
            {echo "<option value=$product->productid>$product->productname</option>";}?>
    </select></label><br>
    <label>สี<select name="Color_ID">
            <?php foreach($productcolorList as $color)
            {echo "<option value=$color->colorid>$color->colorname</option>";}?>
    </select></label><br>
    <label>จำนวนสินค้า <input type="number" name="Quantity"/></label><br>
    <label>จำนวนสีที่ต้องการ <input type="number" name="numcolor"/></label><br>
    <input type="hidden" name="controller" value="billdetail"/>
    <button type="submit" name="action" value="addBilldetail">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>