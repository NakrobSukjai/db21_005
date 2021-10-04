==================== นักรบ สุขใจ 6220502141======================<br>
<table border="1">
<tr><td>ProcductID</td>
<td>ProductName</td>
<td>Rate_ID</td>
<td>Quantity</td>
<td>Price</td>
<td>PriceAddPerColor</td>
<td>Update</td>
<td>Delete</td>
<!-- new rate [<a href="?controller=rate&action=newRate">click</a>]<br> -->
<?php
    foreach($rateList as $rate)
    {
        echo"
        <tr><td>$rate->productid</td>
        <td>$rate->P_Name</td>
        <td>$rate->rateid</td>
        <td>$rate->quantity</td>
        <td>$rate->price</td>
        <td>$rate->priceaddpercolor</td>

        <td>update</td>
        <td>delete</td>
        ";
    }
    echo "</table>";
?>
