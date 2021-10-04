==================ไตรรัตน์ตรี เกาะน้ำใส 6220503210====================<br>
<table border="1">
<tr><td>BillID</td>
<td>ProductID</td>
<td>ProductName</td>
<td>Color</td>
<td>Quantity</td>
<td>PrintColors</td>
<td>update</td>
<td>delete</td>
New BillDetail [<a href="?controller=billdetail&action=newBilldetail">click</a>]<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="billdetail"/>
    <button type="submit" name="action" value="searchBilldetail">Search</button>
</form>
<?php
    foreach($billdetailList as $billdetail)
    {
        echo"
        <tr><td>$billdetail->billid</td>
        <td>$billdetail->productid</td>
        <td>$billdetail->productname</td>
        <td>$billdetail->colorname</td>
        <td>$billdetail->quantity</td>
        <td>$billdetail->numcolor</td>
        <td><a href=?controller=billdetail&action=updateFormBilldetail&Bill_ID=$billdetail->billid&Product_ID=$billdetail->productid&Color_ID=$billdetail->colorid&Quantity=$billdetail->quantity&numcolor=$billdetail->numcolor>update</td>
        <td><a href=?controller=billdetail&action=deleteConfirmBilldetail&Bill_ID=$billdetail->billid&Product_ID=$billdetail->productid&Color_ID=$billdetail->colorid&Quantity=$billdetail->quantity&numcolor=$billdetail->numcolor>delete</td>
        </tr>
        ";
    }
    echo "</table>";
?>
