<?php
include_once("../controller/positioncontroller.php");
$deptid=$_GET['deptid'];

$posControl=new PositionController();
$results=$posControl->showPos($deptid);
$output=null;

foreach($results as $result)
{
   
    $output.="<option value=";
    $output.= $result['id'];
    $output.=">";
    $output.=$result['name'];
    $output.="</option>";
}





echo $output;


?>