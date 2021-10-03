<form method="get" action="">
    <label>รหัสใบสั่งซื้อ <select name="Bill_ID">
        <?php foreach($billdetailList as $billdetail)
        {echo "<option value=$billdetail->billid>$billdetail->billid</option>";}?>
        </select></label><br>
    <label>ProductID <select name="procID">
    <?php foreach($productcolorList as $pro){
        echo "<option value = $pro->productid>
        $pro->productname $pro->colorname</option>";}?>
    </select></label><br>
    <label>จำนวนสินค้า <input type="number" name="Quantity"/></label><br>
    <label>จำนวนสีที่ต้องการ <input type="number" name="numcolor"/></label><br>
    <input type="hidden" name="controller" value="billdetail"/>
    <button type="submit" name="action" value="addBilldetail">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>