==================== ภควัตร บุญศรี 6220504747======================<br>
<table border="1">
<tr><td>รหัสใบเสนอราคา</td>
<td>วันที่</td>
<td>เงื่อนไขการจ่าย</td>
<td>พนักงาน</td>
<td>ลูกค้า</td>
<td>Update</td>
<td>Delete</td>
new bill [<a href="?controller=bill&action=newBill">click</a>]<br>

<form method="get" action="">

    <input type ="text" name= "key"/>
    <input type = "hidden" name = "controller" value = "bill"/>
    <button type = "submit" name="action" value ="search">Search</button>

</form>

<?php
    foreach($billList as $bill)
    {
        echo"
        <tr><td>$bill->bill_id</td>
        <td>$bill->date</td>
        <td>$bill->P_Name</td>
        <td>$bill->emp_name</td>
        <td>$bill->cus_name</td>
        <td> <a href=?controller=bill&action=updateFormBill&Bill_ID=$bill->bill_id &Date=$bill->date &Pay_Name=$bill->P_Name &E_Name=$bill->emp_name &C_Name=$bill->cus_name </td>
        <td>delete</td>
        ";
    }
    echo "</table>";
?>
