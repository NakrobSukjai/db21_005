<form method="get" action="">
    <label>รหัสใบสั่งซื้อ <select name="Bill_ID">
        <?php foreach($billList as $bill){
          echo "<option value = $bill->billid";
          if($bill->billid==$billdetail->billid){echo " selected='selected'";}
          echo ">$bill->billid</option>";
        }?>
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
        echo "<option value = $pro->productid";
        if($pro->productid==$billdetail->productid){echo " selected='selected'";}
        echo ">$pro->productname</option>";
        }?>
    </select></label><br>
    <label>สีของสินค้า <select name="Color_ID">
        <?php foreach($colorList as $color){
        echo "<option value = $color->colorid";
        if($color->colorid==$billdetail->colorid){echo " selected='selected'";}
        echo ">$color->colorname</option>";
        }?>
    </select></label><br>
    <label>จำนวนสินค้า <input type="number" name="Quantity"
        value="<?php echo $billdetail->quantity;?>"/></label><br>
    <label>จำนวนสีที่ต้องการ <input type="number" name="numcolor"
        value="<?php echo $billdetail->numcolor;?>"/></label><br>
    <input type="hidden" name="controller" value="billdetail"/>
    <input type="hidden" name="lastBill_ID" value="<?php echo $billdetail->billid;?>"/>
    <input type="hidden" name="lastProduct_ID" value="<?php echo $billdetail->productid;?>"/>
    <input type="hidden" name="lastColor_ID" value="<?php echo $billdetail->colorid;?>"/>
    <input type="hidden" name="lastQuantity" value="<?php echo $billdetail->quantity;?>"/>
    <input type="hidden" name="lastnumcolor" value="<?php echo $billdetail->numcolor;?>"/>
    <button type="submit" name="action" value="updateBilldetail">update</button>
    <button type="submit" name="action" value="index">Back</button>
    </form>
        