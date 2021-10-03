<form method="get" action="">
    <label>รหัสใบสั่งซื้อ <select name="Bill_ID">
        <?php foreach($quotation_list as $quotation){
          echo "<option value = $quotation->Q_ID";
          if($quotation->Q_ID=$billdetail->Qid){echo " selected='selected'";}
          echo ">$quotation->Q_ID</option>";
        }?>
    </select></label><br>

    <label>สินค้าและสีที่ต้องการ <select name="Product_ID">
        <?php foreach($productcolorList as $pro){
        echo "<option value = $pro->productid";
        if($pro->productid=$billdetail->productid){echo " selected='selected'";}
        echo ">$pro->productname $pro->colorname</option>";
        }?>
    </select></label><br>
    <label>จำนวนสินค้า <input type="number" name="Quantity"/></label><br>
    <label>จำนวนสีที่ต้องการ <input type="number" name="numcolor"/></label><br>
    <input type="hidden" name="controller" value="billdetail"/>
    <button type="submit" name="action" value="updateBilldetail">update</button>
    <button type="submit" name="action" value="index">Back</button>
    </form>
        