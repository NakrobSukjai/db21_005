<form method = "get" action = "">
    <label>รหัสใบเสนอสินค้า <input type ="text" name="Bill_ID"/></label><br>
    <label>วันที่ <input type = "date" name ="Date" placeholder="dd-mm-yyyy" value=""/> </label><br>

    <label>ลูกค้า<select name = "C_Name">
        <?php
            foreach($CustomerList as $cus)
            {
                echo "<option value=$cus->cus_id";
                echo "> $cus->cus_name </option>";
            }
        ?>
        </select>
    </label><br>

    <label>เงื่อนไขการจ่าย <select name = "P_Name">
        <?php
            foreach($paymentList as $pay)
            {
                echo "<option value=$pay->id";
                echo "> $pay->payment </option>";
            }
        ?>
        </select>
    </label><br>

    <label>พนักงาน <select name = "E_name">
        <?php
            foreach ($empList as $emp) 
            {
                echo "<option value=$emp->emp_id> $emp->emp_name </option>";
            }      
        ?>
        </select>
    </label><br>
    
    <input type ="hidden" name="controller" value="bill"/>
    <button type = "submit" name ="action" value="addBill">Save</button>
    <button type = "submit" name = "action" value ="index">Back</button>






</form>