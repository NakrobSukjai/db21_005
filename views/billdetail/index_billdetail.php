
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
<?php
    echo "kuy";
    foreach($billdetailList as $billdetail)
    {
        echo"
        <tr><td>$billdetail->billid</td>
        <td>$billdetail->productid</td>
        <td>$billdetail->productname</td>
        <td>$billdetail->colorname</td>
        <td>$billdetail->quantity</td>
        <td>$billdetail->numcolor</td>
        <td>update</td>
        <td>delete</td></tr>";
    }
    echo "</table>";
?>