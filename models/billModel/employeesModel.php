<?php
class Employees
{
    public $emp_id , $emp_name ;
    public function __construct($emp_id , $emp_name)
    {
        $this-> emp_id = $emp_id ;
        $this-> emp_name = $emp_name ;
    }
    public static function getALL()
    {
        $empList = [] ;
        require("connection_connect.php");
        $sql = "SELECT * From Employees as emp
        ORDER BY emp.EMP_ID" ;
        $result = $conn -> query($sql);
        while($my_row = $result -> fetch_assoc())
        {
            $EMP_ID = $my_row[EMP_ID];
            $E_Name = $my_row[E_Name];

            $empList[] = new Employees($EMP_ID , $E_Name);
        }
        require("connection_close.php");
        return $empList ;
    }
    



}
?>