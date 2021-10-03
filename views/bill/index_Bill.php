==================== ภควัตร บุญศรี 6220504747======================<br>
<table border="1">
<tr><td>รหัสใบเสนอราคา</td>
<td>วันที่</td>
<td>เงื่อนไขการจ่าย</td>
<td>พนักงาน</td>
<td>ลูกค้า</td>
<td>Update</td>
<td>Delete</td>

<?php
    foreach($billList as $bill)
    {
        echo"
        <tr><td>$bill->bill_id</td>
        <td>$bill->date</td>
        <td>$bill->P_Name</td>
        <td>$bill->emp_name</td>
        <td>$bill->cus_name</td>
        <td>$bill->cus_name</td>
        <td>update</td>
        <td>delete</td>
        ";
    }
    echo "</table>";
?>