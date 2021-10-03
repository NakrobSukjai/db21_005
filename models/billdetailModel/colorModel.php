<?php
class Color{
    public $colorid,$colorname;
    public function __construct($C_ID,$C_Name)
    {
        $this->colorid=$C_ID;
        $this->colorname=$C_Name;
    }
    public static function getAll()
    {
        $colorList=[];
        require("connection_connect.php");
        $sql="select * from Colors order by Colors.Color_ID";
        $result=$conn->query($sql);
        while ($my_row=$result->fetch_assoc()) 
        {
            $C_ID=$my_row[Color_ID];
            $C_Name=$my_row[C_Name];
            $colorList[]=new Color($C_ID,$C_Name);
        }
        require("connection_close.php");
        return $colorList;
    }
}
?>