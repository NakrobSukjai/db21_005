<form method = "get" action = "">
    <label>รหัสใบเสนอสินค้า <input type ="text" name="Bill_ID"/></label><br>
    <label>วันที่ <input type = "date" name = 'Date'/></label><br>
    <label>ลูกค้า <input type = "text" name="C_name"/></label><br>
    <label>พนักงาน <select name = "E_name">
        <?php
        foreach($empList as $emp)
        {
            echo "<option value = $emp->emp_name></option>";
        }
        ?>
        </select></label><br>
    
    <input type ="hidden" name="controller" value="bill">
    <button type = "submit" name ="action" value="addBill">Save</button>
    <button type = "submit" name = "action" value ="index">Back</button>






</form>