====================นักรบ สุขใจ 6220502141======================<br>
<table border="1">
<tr><td>ProductID</td>
<td>ProductName</td>
<td>RateID</td>
<td>Quantity</td>
<td>RatePrice</td>
<td>PriceAddPerColor</td>
<td>Update</td>
<td>Delete</td>
New Rate [<a href="?controller=Rate&action=newRate">click</a>]<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="Rate"/>
    <button type="submit" name="action" value="searchRate">Search</button>
</form>
<?php
    foreach($RateList as $Rate)
    {
        echo"
        <tr><td>$Rate->productid</td>
        <td>$Rate->productname</td>
        <td>$Rate->rateid</td>
        <td>$Rate->quantity</td>
        <td>$Rate->price</td>
        <td>$Rate->priceaddpercolor</td>
        <td><a href=?controller=Rate&action=updateFormRate&Product_ID=$Rate->productid&PPP_ID=$Rate->rateid&Quantity=$Rate->quantity&Price=$Rate->price&PriceAddPerColor=$Rate->priceaddpercolor>update</td>
        <td><a href=?controller=Rate&action=deleteConfirmRate&Product_ID=$Rate->productid&PPP_ID=$Rate->rateid&Quantity=$Rate->quantity&Price=$Rate->price&PriceAddPerColor=$Rate->priceaddpercolor>delete</td>
        </tr>
        ";
    }
    echo "</table>";
?>