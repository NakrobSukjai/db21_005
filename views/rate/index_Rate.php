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
New Rate [<a href="?controller=rate&action=newrate">click</a>]<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="rate"/>
    <button type="submit" name="action" value="searchrate">Search</button>
</form>
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

        <td><a href=?controller=rate&action=updateFormrate&P_Name=$rate->P_Name&PPP_ID=$rate->rateid&Quantity=$rate->quantity&Price=$rate->price&PriceAddPerColor=$rate->priceaddpercolor>update</td>
        <td>delete</td>
        ";
    }
    echo "</table>";
?>
