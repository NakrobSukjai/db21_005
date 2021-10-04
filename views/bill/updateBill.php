<form method="get" action="">
    <label>รหัสใบเสนอราคา <input type = 'text' name ='Bill_ID' value ="<?php echo $bill->bill_id;?>"/>
    </label><br>
    <label>วันที่ <input type = "date" name = 'Date' value="<?php echo $bill->date?>"/></label><br>

    <label>ลูกค้า <select name = "C_Name">
        <?php
            foreach($CustomerList as $cus)
            {
                echo "<option value=$cus->cus_id";
                if($cus->$cus_name == $bill->$cus_name)
                {
                    echo "selected='selected'";
                }
                echo ">$cus->cus_name</option>";
            }
        ?>
    </select></label><br>


    <label>เงื่อนไขการจ่าย <select name = "P_Name">
        <?php
            foreach($paymentList as $payment)
            {
                echo "<option value=$payment->id";
                if($payment->payment == $bill->P_Name)
                {
                    echo "selected='selected'";
                }
                echo ">$payment->payment</option>";
            }
        ?>
    </select></label><br>

    <label>พนักงาน <select name = "E_name">
        <?php
            foreach ($empList as $emp) 
            {
                echo "<option value=$emp->emp_id";
                if($emp->emp_name==$bill->$emp_name)
                {
                    echo "selected='selected'";
                }
                echo ">$emp->emp_name</option>";

            }      
        ?>
    </select></label><br>
    <input type="hidden" name = "controller" value ='bill'/>
    <button type = "submit" name="action" value="index">Back</button>
    <button type = "submit" name="action" value="updateBill">update</button>

</form>