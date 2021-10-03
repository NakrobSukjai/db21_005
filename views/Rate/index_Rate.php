<p>=====================นักรบ สุขใจ 6220502141======================</p><br>
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

<?php
    foreach($RateList as $Rate)
    {
        echo"
        <tr><td>$Rate->productid</td>
        <td>$Rate->productname</td>
        <td>$Rate->rateid</td>
        <td>$Rate->Quantity</td>
        <td>$Rate->price</td>
        <td>$Rate->priceaddpercolor</td>
        <td>update</td>
        <td>delete</td>
        </tr>
        ";
    }
    echo "</table>";
?>