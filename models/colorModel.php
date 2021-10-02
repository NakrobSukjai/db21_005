<?php
class Colors{
    public $colorid,$colorname;
    public function __construct($C_ID,$C_Name)
    {
        $this->colorid=$C_ID;
        $this->colorname=$C_Name;
    }
    public static function getAll()
    {
        $colorsList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM Colors";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $C_ID=$my_row[Color_ID];
            $C_Name=$my_row[C_Name];
            $colorsList[]=new Colors($C_ID,$C_Name);
        }
        require("connection_close.php");
        return $colorsList;
    }
}
?>