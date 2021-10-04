<form method="get" action="">
    <label>รหัสใบเสนอราคา <input type = 'text' name ='Bill_ID' value ="<?php echo $bill->bill_id;?>"/>
    </label><br>
    <label>วันที่ <input type = "date" name = 'Date' value="<?php echo $bill->date?>"/></label><br>
    <label>ลูกค้า <input type = "text" name="C_name" value="<?php echo $bill->cus_name?>"/></label><br>

    <label>เงื่อนไขการจ่าย <select name = "Pay_Name">
        <?php
            foreach($billList as $bill)
            {
                echo "<option value=$bill->P_Name";
                if($bill->Pay_Name==$bill->$P_Name)
                {
                    echo "selected='selected'";
                }
                echo ">$bill->P_Name</option>";
            }
        ?>
    </select></label><br>

    <label>พนักงาน <select name = "E_name">
        <?php
            foreach ($empList as $emp) 
            {
                {echo "<option value=$emp->emp_name>$emp->emp_name</option>";}
            }      
        ?>
    </select></label><br>
    <input type="hidden" name = "controller" value ='bill'/>
    <input type="hidden" name = 'lastBill_ID' value="<?php echo $bill->bill_id?>"


</form>