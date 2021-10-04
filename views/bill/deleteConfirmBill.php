<?php
    echo"<br>Are you sure to delete this Bill? <br>
        <br>BILL_ID : $bill->bill_id
        <br>DATE : $bill->date
        <br>PaymentCondition : $bill->P_Name
        <br>Employees : $bill->emp_name
        <br>Customer : $bill->cus_name";
?>


<form method="get" action="">
    <input type="hidden" name="controller" value="bill"/>
    <input type="hidden" name="Bill_ID" value="<?php echo $bill -> bill_id;?>"/>
    <input type="hidden" name="Date" value="<?php echo $bill -> date;?>"/>
    <input type="hidden" name="payment" value="<?php echo $bill -> P_Name;?>"/>
    <input type="hidden" name="emp" value="<?php echo $bill -> emp_name;?>"/>
    <input type="hidden" name="cus" value="<?php echo $bill -> cus_name;?>"/>
    <button type="submit" name="action" value="deleteBill">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>