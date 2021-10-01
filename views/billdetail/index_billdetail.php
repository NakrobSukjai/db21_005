<table border="1">
<tr><td>BillID</td>
<td>ProductID</td>
<td>ColorID</td>
<td>Quantity</td>
<td>PrintColors</td>
<td>update</td>
<td>delete</td>
<?php
    foreach($billdetailList as $billdetail)
    {
        echo"
        <tr><td>$billdetail->billid</td>
        <td>$billdetail->productid</td>
        <td>$billdetail->colorid</td>
        <td>$billdetail->quantity</td>
        <td>$billdetail->numcolor</td>
        <td>update</td>
        <td>delete</td></tr>";
    }
    echo "</table>";
?>